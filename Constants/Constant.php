<?php
namespace orangeplus\Five9WebServices\Constants;

abstract class Constant
{
  /**
   * @param $value
   *
   * @return bool
   */
  public static function isValid($value)
  {
    $class = get_called_class();
    $reflection = new \ReflectionClass($class);

    return in_array($value, $reflection->getConstants());
  }
}