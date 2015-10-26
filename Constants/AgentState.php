<?php
namespace Five9WebServices\Constants;

/**
 * Class AgentState
 *
 * @package Five9WebServices\Constants
 */
class AgentState extends Constant
{
  /**
   * @var string Available to take calls.
   */
  const AVAILABLE_FOR_CALLS = 'AVAILABLE_FOR_CALLS';
  /**
   * @var string Available to take voicemail messages.
   */
  const AVAILABLE_FOR_VMS = 'AVAILABLE_FOR_VMS';
  /**
   * @var string Logged in or logging in.
   */
  const LOGIN = 'LOGIN';
  /**
   * @var string Logged out or logging out.
   */
  const LOGOUT = 'LOGOUT';
  /**
   * @var string Not available to take calls.
   */
  const NOT_AVAILABLE_FOR_CALLS = 'NOT_AVAILABLE_FOR_CALLS';
  /**
   * @var string Not available to take voicemail messages.
   */
  const NOT_AVAILABLE_FOR_VMS = 'NOT_AVAILABLE_FOR_VMS';
  /**
   * @var string Not ready.
   */
  const NOT_READY = 'NOT_READY';
  /**
   * @var string Ready.
   */
  const READY = 'READY';
  /**
   * @var string Currently taking a voicemail message.
   */
  const VM_IN_PROGRESS = 'VM_IN_PROGRESS';
  /**
   * @var string Voicemail not available.
   */
  const VM_NOT_AVAILABLE = 'VM_NOT_AVAILABLE';
  /**
   * @var string Waiting.
   */
  const WAITING = 'WAITING';
}
