<?php
namespace Five9WebServices\Constants;

class AgentAvailability extends Constant
{
  /**
   * @var string One or more agents are available, ready, and not on call.
   */
  const READY_TO_RECEIVE_CALLS = 'ReadyToReceiveCalls';

  /**
   * @var string
   * One or more agents are logged in and are either ready or busy taking or
   * finishing another call. Agents are not considered busy if they are making a
   * manual call after having been on break.
   */
  const READY_TO_RECEIVE_CALLS_OR_BUSY = 'ReadyToReceiveCallsOrBusy';

  /**
   * @var string
   * One or more agents are logged in, regardless of their current status.
   */
  const LOGGED_IN = 'LoggedIn';

}