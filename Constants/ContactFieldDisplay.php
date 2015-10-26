<?php
namespace Five9WebServices\Constants;

/**
 * Class ContactFieldDisplay
 *
 * @package Five9WebServices\Constants
 *
 * This data type contains the options for the appearance of field data in
 * the agent's desktop.
 */
class ContactFieldDisplay extends Constant
{
  /**
   * @var string Half line.
   */
  const SHORT = 'Short';
  /**
   * @var string Full line.
   */
  const LONG = 'Long';
  /**
   * @var string Not represented.
   */
  const INVISIBLE = 'Invisible';
}