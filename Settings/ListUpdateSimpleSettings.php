<?php
namespace Five9WebServices\Settings;

/**
 * Class ListUpdateSimpleSettings
 *
 * @package Five9WebServices\Settings
 */
class ListUpdateSimpleSettings extends FieldMapped
{
  /** @var bool $callAsap Whether to call the contact as soon as  possible. */
  private $callAsap = true;
  /** @var string $countryCode */
  private $countryCode = 'US';
  /** @var int $timeToCall Timestamp */
  private $timeToCall;
  /** @var bool $updateCRM */
  private $updateCRM = true;

  /**
   * @return array
   */
  public function toArray()
  {
    return get_object_vars($this);
  }

  /**
   * @return boolean
   */
  public function isCallAsap()
  {
    return $this->callAsap;
  }

  /**
   * @param boolean $callAsap
   */
  public function setCallAsap($callAsap)
  {
    $this->callAsap = $callAsap;
  }

  /**
   * @return string
   */
  public function getCountryCode()
  {
    return $this->countryCode;
  }

  /**
   * @param string $countryCode
   */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }

  /**
   * @return int
   */
  public function getTimeToCall()
  {
    return $this->timeToCall;
  }

  /**
   * @param int $timeToCall
   */
  public function setTimeToCall($timeToCall)
  {
    $this->timeToCall = $timeToCall;
  }

  /**
   * @return boolean
   */
  public function isUpdateCRM()
  {
    return $this->updateCRM;
  }

  /**
   * @param boolean $updateCRM
   */
  public function setUpdateCRM($updateCRM)
  {
    $this->updateCRM = $updateCRM;
  }

}