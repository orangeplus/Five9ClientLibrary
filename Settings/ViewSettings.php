<?php
namespace Five9WebServices\Settings;

/**
 * Class ViewSettings
 *
 * @package Five9WebServices\Settings
 */
class ViewSettings
{
  /** @var boolean $forceLogoutSession */
  private $forceLogoutSession = false;
  /** @var int $timeZone */
  private $timeZone = -25200000;
  /** @var string $rollingPeriod */
  private $rollingPeriod = 'Minutes5';
  /** @var int $shiftStart */
  private $shiftStart = 28800000;
  /** @var string $statisticsRange */
  private $statisticsRange = 'RollingHour';

  public function toArray()
  {
    return get_object_vars($this);
  }

  /**
   * @return boolean
   */
  public function isForceLogoutSession()
  {
    return $this->forceLogoutSession;
  }

  /**
   * @param boolean $forceLogoutSession
   */
  public function setForceLogoutSession($forceLogoutSession)
  {
    $this->forceLogoutSession = $forceLogoutSession;
  }

  /**
   * @return int
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }

  /**
   * @param int $timeZone
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }

  /**
   * @return string
   */
  public function getRollingPeriod()
  {
    return $this->rollingPeriod;
  }

  /**
   * @param string $rollingPeriod
   */
  public function setRollingPeriod($rollingPeriod)
  {
    $this->rollingPeriod = $rollingPeriod;
  }

  /**
   * @return int
   */
  public function getShiftStart()
  {
    return $this->shiftStart;
  }

  /**
   * @param int $shiftStart
   */
  public function setShiftStart($shiftStart)
  {
    $this->shiftStart = $shiftStart;
  }

  /**
   * @return string
   */
  public function getStatisticsRange()
  {
    return $this->statisticsRange;
  }

  /**
   * @param string $statisticsRange
   */
  public function setStatisticsRange($statisticsRange)
  {
    $this->statisticsRange = $statisticsRange;
  }
}