<?php
namespace Five9WebServices\Constants;

/**
 * Class CallVariableType
 *
 * @package Five9WebServices\Constants
 */
class CallVariableType extends Constant
{
  /**
   * @var string Letters and numbers.
   */
  const STRING = 'STRING';
  /**
   * @var string Numbers only.
   */
  const NUMBER = 'NUMBER';
  /**
   * @var string Date only.
   */
  const DATE = 'DATE';
  /**
   * @var string Time only.
   */
  const TIME = 'TIME';
  /**
   * @var string Date and time.
   */
  const DATE_TIME = 'DATE_TIME';
  /**
   * @var string Currency.
   */
  const CURRENCY = 'CURRENCY';
  /**
   * @var string True or false.
   */
  const BOOLEAN = 'BOOLEAN';
  /**
   * @var string Percentage.
   */
  const PERCENT = 'PERCENT';
  /**
   * @var string Email address.
   */
  const EMAIL = 'EMAIL';
  /**
   * @var string URL.
   */
  const URL = 'URL';
  /**
   * @var string Phone number.
   */
  const PHONE = 'PHONE';
  /**
   * @var string Time interval.
   */
  const TIME_PERIOD = 'TIME_PERIOD';
}