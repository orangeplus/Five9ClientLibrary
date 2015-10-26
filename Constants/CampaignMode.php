<?php
namespace Five9WebServices\Constants;

/**
 * Class CampaignMode
 *
 * @package Five9WebServices\Constants
 */
class CampaignMode extends Constant
{
  /**
   * @var string Campaign with default settings, without a campaign profile.
   */
  const BASIC = 'BASIC';
  /**
   * @var string
   * Campaign with a campaign profile specified in the profileName parameter.
   */
  const ADVANCED = 'ADVANCED';
}