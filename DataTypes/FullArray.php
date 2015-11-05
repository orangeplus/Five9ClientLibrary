<?php
namespace orangeplus\Five9WebServices\DataTypes;

use Five9WebServices\DataTypes\Results;

/**
 * Class FullArray
 *
 * @package Five9WebServices\DataTypes
 */
abstract class FullArray
{
  use \Five9WebServices\Castable;

  /**
   * The DataTypes use private and protected variables to ensure the setters
   * and getters are used. The toArray methods of objects extending this class
   * will return all members irrespective of visibility
   *
   * @return array
   */
  public function __toArray()
  {
    return get_object_vars($this);
  }
}