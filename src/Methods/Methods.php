<?php
namespace orangeplus\Five9WebServices\Methods;

use orangeplus\Five9WebServices\Contact;

/**
 * Class Methods
 *
 * @package Five9WebServices\Methods
 */
abstract class Methods
{
  /** @var  \SoapClient */
  protected $client;

  /**
   * Methods constructor.
   *
   * @param \SoapClient $client
   */
  public function __construct(\SoapClient $client)
  {
    $this->client = $client;
  }

  /**
   * @return \SoapClient
   */
  public function getClient()
  {
    return $this->client;
  }

  /**
   * @param \SoapClient $client
   *
   * @return Methods
   */
  public function setClient($client)
  {
    $this->client = $client;

    return $this;
  }
}