<?php
namespace orangeplus\Five9WebServices\Constants;

/**
 * Class CampaignState
 *
 * @package Five9WebServices\Constants
 */
class CampaignState extends Constant
{
  /**
   * @var string Campaign not currently active.
   */
  const NOT_RUNNING = 'NOT_RUNNING';
  /**
   * @var string Campaign being initialized.
   */
  const STARTING = 'STARTING';
  /**
   * @var string Campaign currently active.
   */
  const RUNNING = 'RUNNING';
  /**
   * @var string Campaign currently stopping.
   */
  const STOPPING = 'STOPPING';
  /**
   * @var string
   * Temporary state of an outbound campaign that is returning to its initial
   * state. All dialing results of the outbound campaign are cleared so that
   * all records can be redialed.
   */
  const RESETTING = 'RESETTING';


}