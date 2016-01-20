<?php
namespace orangeplus\Five9WebServices\DataTypes;

/**
 * Class DispositionTypeParams
 *
 * @package Five9WebServices\DataTypes
 */
class DispositionTypeParams
{
  /** @var  boolean */
  private $allowChangeTimer;
  /** @var  int */
  private $attempts;
  /** @var  Timer */
  private $timer;
  /** @var  boolean */
  private $userTimer;

  /**
   * @return boolean
   */
  public function isAllowChangeTimer()
  {
    return $this->allowChangeTimer;
  }

  /**
   * @param boolean $allowChangeTimer
   *
   * @return DispositionTypeParams
   */
  public function setAllowChangeTimer($allowChangeTimer)
  {
    $this->allowChangeTimer = $allowChangeTimer;

    return $this;
  }

  /**
   * @return int
   */
  public function getAttempts()
  {
    return $this->attempts;
  }

  /**
   * @param int $attempts
   *
   * @return DispositionTypeParams
   */
  public function setAttempts($attempts)
  {
    $this->attempts = $attempts;

    return $this;
  }

  /**
   * @return Timer
   */
  public function getTimer()
  {
    return $this->timer;
  }

  /**
   * @param Timer $timer
   *
   * @return DispositionTypeParams
   */
  public function setTimer($timer)
  {
    $this->timer = $timer;

    return $this;
  }

  /**
   * @return boolean
   */
  public function isUserTimer()
  {
    return $this->userTimer;
  }

  /**
   * @param boolean $userTimer
   *
   * @return DispositionTypeParams
   */
  public function setUserTimer($userTimer)
  {
    $this->userTimer = $userTimer;

    return $this;
  }


}