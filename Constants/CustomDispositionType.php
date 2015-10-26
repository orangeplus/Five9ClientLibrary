<?php
namespace Five9WebServices\Constants;

/**
 * Class CustomDispositionType
 *
 * @package Five9WebServices\Constants
 */
class CustomDispositionType extends Constant
{
  /**
   * @var string
   * Any contact number of the contact is not dialed again by the current
   * campaign.
   */
  const FINAL_DISP = 'FinalDisp';
  /**
   * @var string
   * Contact is not dialed again by any campaign that contains the disposition.
   */
  const FINAL_APPLY_TO_CAMPAIGNS = 'FinalApplyToCampaigns';
  /**
   * @var string Adds the number dialed to the DNC  list.
   */
  const ADD_ACTIVE_NUMBER = 'AddActiveNumber';
  /**
   * @var string
   * Adds the call results to the campaign history. This record is no longer
   * dialing in this campaign. Does not add the contact's other phone numbers
   * to the DNC list.
   */
  const ADD_AND_FINALIZE = 'AddAndFinalize';
  /**
   * @var string Adds all the contact's phone numbers to the DNC list.
   */
  const ADD_ALL_NUMBERS = 'AddAllNumbers';
  /**
   * @var string
   * Number is not dialed in the campaign, but other numbers from the CRM
   * record can be dialed.
   */
  const DO_NOT_DIAL = 'DoNotDial';
  /**
   * @var string
   * Number is dialed again when the list to dial is completed, and the dialer
   * starts again from the beginning.
   */
  const REDIAL_NUMBER = 'RedialNumber';
}