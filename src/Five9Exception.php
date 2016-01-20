<?php
namespace orangeplus\Five9WebServices;

/**
 * Class Five9Exception
 *
 * @package  Five9WebServices
 * @author   Keith Rockhold <keith@keithrockhold.com>
 */
class Five9Exception extends \Exception
{
  /** @var string $userMessage */
  protected $userMessage;

  /**
   * @param $message
   */
  public function setUserMessage($message)
  {
    $this->userMessage = $message;
  }

  /**
   * @return string
   */
  public function getUserMessage()
  {
    return $this->userMessage;
  }
}