<?php
namespace orangeplus\Five9WebServices\Settings;

/**
 * Class FieldMapped
 *
 * @package Five9WebServices\Settings
 */
class FieldMapped
{
  /** @var array Mapping of the column number to the field name in the contact database */
  protected $fieldsMapping;

  /**
   * FieldMapped constructor.
   *
   * @param \Five9WebServices\Contact $record
   */
  public function __construct($record = null)
  {
    if ($record) {
      $this->fieldsMapping = $record->getFieldMappingArray();
    }
  }

  /**
   * @param array $fieldsMapping
   */
  public function setFieldsMapping($fieldsMapping)
  {
    $this->fieldsMapping = $fieldsMapping;
  }

  /**
   * @return array
   */
  public function getFieldsMapping()
  {
    return $this->fieldsMapping;
  }

  /**
   * Takes a payload payload or object and creates the field mappings
   *
   * @param array|object $payload
   */
  public function setFieldsMappingFromArray($payload)
  {
    if (is_object($payload)) {
      $payload = $payload->toArray();
    }

    $columns = array();
    $keys = array_keys($payload);
    for ($x = 0; $x < count($payload); ++$x) {
      if ($keys[$x] == 'number1') {
        $key = "true";
      } else {
        $key = "false";
      }
      $columns[$x] = array("columnNumber" => $x + 1,
                           "fieldName"    => $keys[$x],
                           "key"          => $key);
    }
    $this->setFieldsMapping($columns);
  }


}