<?php
namespace orangeplus\Five9WebServices;

use Five9WebServices\Settings\ViewSettings;

/**
 * Class Five9StatisticsService
 *
 * @package Five9WebServices
 */
class Five9StatisticsService
{
  /** @var $client \SoapClient */
  public $client;
  /** @var string */
  const AGENT_STATE = 'AgentState';

  /**
   * @param $username
   * @param $password
   */
  function __construct($username, $password)
  {
    $wsdlFive9 = "https://api.five9.com/wssupervisor/SupervisorWebService?wsdl&user=".
      $username;
    $options = array(
      'login'      => $username,
      'password'   => $password,
      'trace'      => true,
      'exceptions' => true,
      'cache_wsdl' => WSDL_CACHE_NONE
    );
    $this->client = new \SoapClient($wsdlFive9, $options);
    $this->setSessionParameters();
  }

  /**
   * @param null $viewSettings
   *
   * @return mixed
   */
  public function setSessionParameters($viewSettings = null)
  {
    if ($viewSettings == null) {
      $viewS = new ViewSettings();
      $viewSettings = $viewS->toArray();
    }

    $result = $this->client->setSessionParameters(
      array('viewSettings' => $viewSettings)
    );

    return $result;
  }

  public function getLoggedInUsers()
  {
    $result = $this->client->getLoggedInUsers();

    return $result;
  }

  /**
   * @param string $statisticType
   *
   * @return mixed
   * @throws Five9Exception
   */
  public function getStatisticsUpdate($statisticType = 'AgentState')
  {
    try {
      $result = $this->client->getStatisticsUpdate(
        array(
          'statisticType'      => $statisticType,
          'previousTimestamp'  => time() - 100,
          'longPollingTimeout' => 100
        )
      );
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }

    return $result;
  }

  /**
   * @param string $statisticType
   * @param null   $columnNames
   *
   * @return mixed
   * @throws Five9Exception
   */
  public function getStatistics($statisticType = 'AgentState',
    $columnNames = null
  ) {
    $data = array(
      'statisticType' => $statisticType,
    );

    if ($columnNames) {
      $data['columnNames']['values'] = $columnNames;
    }

    try {
      $result = $this->client->getStatistics($data);
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }

    return $result;
  }
}
