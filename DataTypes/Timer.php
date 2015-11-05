<?php
namespace orangeplus\Five9WebServices\DataTypes;

/**
 * Class Timer
 *
 * @package Five9WebServices\DataTypes
 */
class Timer
{
  use \Five9WebServices\Castable;

  /** @var  int */
  public $days;
  /** @var  int */
  public $hours;
  /** @var  int */
  public $minutes;
  /** @var  int */
  public $seconds;

  /**
   * Timer creator.
   *
   * @param int $days
   * @param int $hours
   * @param int $minutes
   * @param int $seconds
   *
   * @return Timer
   */
  public static function create($days, $hours, $minutes, $seconds)
  {
    $timer = new Timer();
    $timer->setDays($days);
    $timer->setHours($hours);
    $timer->setMinutes($minutes);
    $timer->setSeconds($seconds);

    return $timer;
  }

  /**
   * @return int
   */
  public function getDays()
  {
    return $this->days;
  }

  /**
   * @param int $days
   *
   * @return Timer
   */
  public function setDays($days)
  {
    $this->days = $days;

    return $this;
  }

  /**
   * @return int
   */
  public function getHours()
  {
    return $this->hours;
  }

  /**
   * @param int $hours
   *
   * @return Timer
   */
  public function setHours($hours)
  {
    $this->hours = $hours;

    return $this;
  }

  /**
   * @return int
   */
  public function getMinutes()
  {
    return $this->minutes;
  }

  /**
   * @param int $minutes
   *
   * @return Timer
   */
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;

    return $this;
  }

  /**
   * @return int
   */
  public function getSeconds()
  {
    return $this->seconds;
  }

  /**
   * @param int $seconds
   *
   * @return Timer
   */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;

    return $this;
  }

}