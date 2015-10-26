<?php
namespace Five9WebServices\Constants;

class CampaignType extends Constant
{
  /**
   * @var string
   * Calls made by a dialer to customers in lists created by administrators.
   * These calls are passed to agents who process the calls.
   */
  const OUTBOUND = 'OUTBOUND';
  /**
   * @var string
   * Numbers are dialed automatically to phone numbers in a list. The campaign
   * uses call-progress detection to determine whether the call was received by
   * an answering machine or a person.
   */
  const AUTODIAL = 'AUTODIAL';
  /**
   * @var string
   * Calls received from customers originate from a DNIS. The calls are
   * processed according to the rules set in the IVR Script of the campaign.
   */
  const INBOUND = 'INBOUND';

}
