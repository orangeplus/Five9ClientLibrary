<?php
namespace Five9WebServices\Constants;

/**
 * Class CampaignDialingMode
 *
 * @package Five9WebServices\Constants
 */
class CampaignDialingMode extends Constant
{
  /**
   * @var string
   * Depending on campaign statistics, dials at a variable
   * calls-to-agent ratio. For  maximum agent use, predicts agent availability
   * to begin dialing calls before an agent becomes ready for calls.
   */
  const PREDICTIVE = 'PREDICTIVE';
  /**
   * @var string
   * Depending on campaign statistics, dials at a variable
   * calls-to-agent ratio when an agent becomes available
   */
  const PROGRESSIVE = 'PROGRESSIVE';
  /**
   * @var string
   * Enables the agent to review the contact details before dialing
   * or skipping the record. To use the Preview-Only Manual Dialing mode as
   * defined in the VCC (for outbound campaigns only), you must set
   * limitPreviewTime=True and  dialNumberOnTimeout=False. For more information
   * on setting related flags, see outboundCampaign.
   */
  const PREVIEW = 'PREVIEW';
  /**
   * @var string
   * Dials at a fixed calls-to-agent ratio (1-to-1 or higher) when
   * an agent becomes available.
   */
  const POWER = 'POWER';

}
