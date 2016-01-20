<?php
namespace orangeplus\Five9WebServices\Constants;

/**
 * Class CavRestrictionType
 *
 * @package Five9WebServices\Constants
 */
class CavRestrictionType extends Constant
{
  /**
   * @var string Minimum value.
   */
  const MIN_VALUE = 'MinValue';
  /**
   * @var string Maximum value.
   */
  const MAX_VALUE = 'MaxValue';
  /**
   * @var string Regular expressions.
   */
  const REGEXP = 'Regexp';
  /**
   * @var string Field must contain a value.
   */
  const REQUIRED = 'Required';
  /**
   * @var string Single value.
   */
  const SET = 'Set';
  /**
   * @var string Several possible values.
   */
  const MULTISET = 'Multiset';
  /**
   * @var string Digits after decimal point.
   */
  const PRECISION = 'Precision';
  /**
   * @var string Digits before decimal point.
   */
  const SCALE = 'Scale';
  /**
   * @var string Time format.
   */
  const TIME_FORMAT = 'TimeFormat';
  /**
   * @var string Date format.
   */
  const DATE_FORMAT = 'DateFormat';
  /**
   * @var string Time interval format.
   */
  const TIME_PERIOD_FORMAT = 'TimePeriodFormat';
  /**
   * @var string Symbol for the type of currency, for example: $
   */
  const CURRENCY_TYPE = 'CurrencyType';
}
