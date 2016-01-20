<?php
namespace orangeplus\Five9WebServices;

/**
 * Trait Castable
 *
 * Provides the cast method for results to convert stdClass results from
 * SoapClient into a DataType class.
 *
 * @package Five9WebServices
 */
trait Castable
{
  /**
   * Casts a stdClass to this class. In classes which use this trait, it
   * may be necessary to make their properties public
   *
   * @param \stdClass $source
   *
   * @return mixed
   */
  public static function cast(\stdClass $source)
  {
    // create a new one of me
    $className = get_called_class();
    $me = new $className();

    // get the properties of the source
    $reflection = new \ReflectionObject($source);
    $properties = $reflection->getProperties();

    // go over each
    foreach ($properties as $property) {
      $name = $property->getName();

      // if this is an object, recurse
      if (is_object($source->{$name})) {
        $newClassName = __NAMESPACE__.'\\'.ucfirst($name);

        // in order to recurse, it must extend Results, otherwise cast it to an
        // array
        if (is_subclass_of($newClassName, __NAMESPACE__.'\\'.'Results')) {
          $me->{$name} = $newClassName::cast($source->{$name});
        } else {
          $me->{$name} = (array)$source->{$name};
        }

      } else {
        $me->{$name} = $source->$name;
      }
    }

    return $me;
  }
}