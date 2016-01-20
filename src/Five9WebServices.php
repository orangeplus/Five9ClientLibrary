<?php
namespace orangeplus\Five9WebServices;

use orangeplus\Five9WebServices\Methods\DispositionConfiguration;
use orangeplus\Five9WebServices\Methods\Contact;
use orangeplus\Five9WebServices\Methods\CampaignList;
use orangeplus\Five9WebServices\Methods\User;

/**
 * Class Five9WebServices
 * @author   Keith Rockhold <keith@keithrockhold.com>
 */
class Five9WebServices
{
  /** @var $client \SoapClient */
  private $client;
  /** @var  Contact */
  public $contacts;
  /** @var  CampaignList */
  public $lists;
  /** @var  DispositionConfiguration */
  public $dispositions;
  /** @var User */
  public $user;

  /**
   * @param $username
   * @param $password
   */
  function __construct($username, $password)
  {
    $wsdlFive9
      = "https://api.five9.com/wsadmin/v4/AdminWebService?wsdl&user=".$username;
    $options = array(
      'login'      => $username,
      'password'   => $password,
      'trace'      => true,
      'exceptions' => true,
      'cache_wsdl' => WSDL_CACHE_NONE
    );
    $this->client = new \SoapClient($wsdlFive9, $options);
    $this->contacts = new Contact($this->client);
    $this->lists = new CampaignList($this->client);
    $this->dispositions = new DispositionConfiguration($this->client);
    $this->user = new User($this->client);
  }


  /**
   * @param string $campaign
   *
   * @return mixed
   */
  public function getOutboundCampaign($campaign)
  {
    $result = $this->client->getOutboundCampaign(
      array('campaignName' => $campaign)
    );

    return $result;
  }

  /**
   * @param \stdClass $result
   * @param string    $importType
   *
   * @return string
   */
  function checkImport($result, $importType)
  {
    $variables = get_object_vars($result);
    $resp = get_object_vars($variables['return']);
    $identifier = $resp['identifier']; //the ID for the import

    //-------check progress of import ()----------------------

    $import_running = true;
    $IIR_p = array(
      'identifier' => array('identifier' => $identifier),
      // 'waitTime' => 10
    );
    while ($import_running) {
      try {
        $IIR_result = $this->client->isImportRunning($IIR_p);
        $variables = get_object_vars($IIR_result);
        $import_running = $variables['return'];
      } catch (\Exception $e) {
        $error_message = $e->getMessage();
        echo $error_message;
      }
    }
    //------get result ()---------------------------------
    try {
      $GLIR_p = array('identifier' => array('identifier' => $identifier));
      $GLIR_result = $this->client->$importType($GLIR_p);

      return $GLIR_result;
    } catch (\Exception $e) {
      $error_message = $e->getMessage();

      return $error_message;
    }
  }
}