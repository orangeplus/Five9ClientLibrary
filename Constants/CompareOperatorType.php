<?php
namespace orangeplus\Five9WebServices\Constants;

/**
 * Class CompareOperatorType
 *
 * @package Five9WebServices\Constants
 */
class CompareOperatorType extends Constant
{
  /**
   * @var string Contains a specified value.
   */
  const CONTAINS = 'Contains';
  /**
   * @var string Does not contain a specified value.
   */
  const DONT_CONTAINS = 'DontContains';
  /**
   * @var string Null.
   */
  const IS_NULL = 'IsNull';
  /**
   * @var string Is not null.
   */
  const IS_NOT_NULL = 'IsNotNull';
  /**
   * @var string Ends with.
   */
  const ENDS_WITH = 'EndsWith';
  /**
   * @var string Is equal to.
   */
  const EQUALS = 'Equals';
  /**
   * @var string Not equal to.
   */
  const NOT_EQUAL = 'NotEqual';
  /**
   * @var string Greater than.
   */
  const GREATER = 'Greater';
  /**
   * @var string Greater than or equal to.
   */
  const GREATER_OR_EQUAL = 'GreaterOrEqual';
  /**
   * @var string Less than.
   */
  const LESS = 'Less';
  /**
   * @var string Less than or equal to.
   */
  const LESS_OR_EQUAL = 'LessOrEqual';
  /**
   * @var string Specified pattern in a column (see SQL LIKE operator)
   */
  const LIKE = 'Like';
  /**
   * @var string Starts with.
   */
  const STARTS_WITH = 'StartsWith';

}