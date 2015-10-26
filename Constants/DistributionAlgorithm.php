<?php
namespace Five9WebServices\Constants;

/**
 * Class DistributionAlgorithm
 *
 * @package Five9WebServices\Constants
 */
class DistributionAlgorithm extends Constant
{
  /**
   * @var string Agent with the longest idle time since the last call.
   */
  const LONGEST_READY_TIME = 'LongestReadyTime';
  /**
   * @var string
   * Agent with the longest idle time, excluding manual calls, such as callbacks.
   */
  const LONGEST_READY_TIME_EXCLUDE_M_C = 'LongestReadyTimeExcludeMC';
  /**
   * @var string
   * Agent with the highest idle time among those logged into the queue. When
   * agents log into the queue, they  have the lowest idle time. The first
   * queued call is delivered to the agent with the highest idle time. This
   * agent is removed from the list. The process continues with the next agent
   * with the highest idle time and the next queued call.
   */
  const ROUND_ROBIN = 'RoundRobin';
  /**
   * @var string
   * Agent who has handled the fewest calls during the interval specified in
   * distributionTimeFrame.
   */
  const MIN_CALLS_HANDLED = 'MinCallsHandled';
  /**
   * @var string
   * Agent who has the lowest total call handle time during the interval
   * specified in distributionTimeFrame.
   */
  const MIN_HANDLE_TIME = 'MinHandleTime';

}