<?php
namespace orangeplus\Five9WebServices\Constants;

/**
 * Class CallTypes
 *
 * @package Five9WebServices\Constants
 */
class CallTypes extends Constant
{
  /**
   * @var string Call dialed manually by an agent.
   */
  const AGENT = 'AGENT';
  /**
   * @var string Call in an autodial campaign.
   */
  const AUTODIAL = 'AUTODIAL';
  /**
   * @var string Call in an inbound campaign.
   */
  const INBOUND = 'INBOUND';
  /**
   * @var string Voicemail in an inbound campaign.
   */
  const INBOUND_VOICEMAIL = 'INBOUND_VOICEMAIL';
  /**
   * @var string Call made in your Five9 domain.
   */
  const INTERNAL = 'INTERNAL';
  /**
   * @var string Voicemail made within your Five9 domain.
   */
  const INTERNAL_VOICEMAIL = 'INTERNAL_VOICEMAIL';
  /**
   * @var string Call in an outbound campaign.
   */
  const OUTBOUND = 'OUTBOUND';
  /**
   * @var string Call in preview mode made in an outbound campaign.
   */
  const OUTBOUND_PREVIEW = 'OUTBOUND_PREVIEW';
  /**
   * @var string Voicemail made in an outbound campaign.
   */
  const OUTBOUND_VOICEMAIL = 'OUTBOUND_VOICEMAIL';
  /**
   * @var string Test call.
   */
  const TEST = 'TEST';

}