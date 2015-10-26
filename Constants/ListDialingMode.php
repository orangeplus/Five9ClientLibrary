<?php
namespace Five9WebServices\Constants;

/**
 * Class ListDialingMode
 *
 * @package Five9WebServices\Constants
 */
class ListDialingMode extends Constant
{
  /**
   * @var string
   * Dialer attempts to call all numbers in a CRM record before proceeding to
   * the next record.
   */
  const VERTICAL_DIALING = 'VERTICAL_DIALING';
  /**
   * @var string
   * Dialer attempts to call all numbers in a column before proceeding to the
   * next column.
   */
  const LIST_PENETRATION = 'LIST_PENETRATION';
  /**
   * @var string
   * Dialer attempts to call numbers in a list in order of importance. For
   * example, until a contact is reached, numbers that are more important are
   * redialed sooner and more often than those that are not.
   */
  const EXTENDED_STRATEGY = 'EXTENDED_STRATEGY';

}