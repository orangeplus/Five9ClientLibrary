<?php
namespace orangeplus\Five9WebServices\Constants;

/**
 * Class CampaignDialingOrder
 *
 * @package Five9WebServices\Constants
 */
class CampaignDialingOrder extends Constant
{
  /**
   * @var string Primary > first alternate > second alternate.
   */
  const PRIMARY_ALT1_ALT2 = 'PrimaryAlt1Alt2';
  /**
   * @var string Primary > second alternate > first alternate.
   */
  const PRIMARY_ALT2_ALT1 = 'PrimaryAlt2Alt1';
  /**
   * @var string First alternate > primary > second alternate.
   */
  const ALT1_PRIMARY_ALT2 = 'Alt1PrimaryAlt2';
  /**
   * @var string First alternate > second alternate > primary.
   */
  const ALT1_ALT2_PRIMARY = 'Alt1Alt2Primary';
  /**
   * @var string Second alternate > primary > first alternate.
   */
  const ALT2_PRIMARY_ALT1 = 'Alt2PrimaryAlt1';
  /**
   * @var string Second alternate > first alternate > primary.
   */
  const ALT2_ALT1_PRIMARY = 'Alt2Alt1Primary';

}