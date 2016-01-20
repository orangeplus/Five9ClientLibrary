<?php
namespace orangeplus\Five9WebServices\DataTypes;

/**
 * Class AgentProductivity
 *
 * @package Five9WebServices\DataTypes
 */
class AgentProductivity extends FullArray
{
  /** @var int */
  private $longACWTime;
  /** @var int */
  private $longCallDuration;
  /** @var int */
  private $longHoldDuration;
  /** @var int */
  private $longParkDuration;
  /** @var int */
  private $shortACWTime;
  /** @var int */
  private $shortCallDuration;

  /**
   * AgentProductivity create
   *
   * @param int $longACWTime
   * @param int $longCallDuration
   * @param int $longHoldDuration
   * @param int $longParkDuration
   * @param int $shortACWTime
   * @param int $shortCallDuration
   *
   * @return AgentProductivity
   */
  public static function create($longACWTime, $longCallDuration,
    $longHoldDuration, $longParkDuration, $shortACWTime, $shortCallDuration
  ) {
    $agentProductivity = new AgentProductivity();
    $agentProductivity->longACWTime = $longACWTime;
    $agentProductivity->longCallDuration = $longCallDuration;
    $agentProductivity->longHoldDuration = $longHoldDuration;
    $agentProductivity->longParkDuration = $longParkDuration;
    $agentProductivity->shortACWTime = $shortACWTime;
    $agentProductivity->shortCallDuration = $shortCallDuration;

    return $agentProductivity;
  }

  /**
   * @return int
   */
  public function getLongACWTime()
  {
    return $this->longACWTime;
  }

  /**
   * @param int $longACWTime
   */
  public function setLongACWTime($longACWTime)
  {
    $this->longACWTime = $longACWTime;
  }

  /**
   * @return int
   */
  public function getLongCallDuration()
  {
    return $this->longCallDuration;
  }

  /**
   * @param int $longCallDuration
   */
  public function setLongCallDuration($longCallDuration)
  {
    $this->longCallDuration = $longCallDuration;
  }

  /**
   * @return int
   */
  public function getLongHoldDuration()
  {
    return $this->longHoldDuration;
  }

  /**
   * @param int $longHoldDuration
   */
  public function setLongHoldDuration($longHoldDuration)
  {
    $this->longHoldDuration = $longHoldDuration;
  }

  /**
   * @return int
   */
  public function getLongParkDuration()
  {
    return $this->longParkDuration;
  }

  /**
   * @param int $longParkDuration
   */
  public function setLongParkDuration($longParkDuration)
  {
    $this->longParkDuration = $longParkDuration;
  }

  /**
   * @return int
   */
  public function getShortACWTime()
  {
    return $this->shortACWTime;
  }

  /**
   * @param int $shortACWTime
   */
  public function setShortACWTime($shortACWTime)
  {
    $this->shortACWTime = $shortACWTime;
  }

  /**
   * @return int
   */
  public function getShortCallDuration()
  {
    return $this->shortCallDuration;
  }

  /**
   * @param int $shortCallDuration
   */
  public function setShortCallDuration($shortCallDuration)
  {
    $this->shortCallDuration = $shortCallDuration;
  }
}