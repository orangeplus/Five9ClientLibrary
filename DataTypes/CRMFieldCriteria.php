<?php
namespace Five9WebServices\DataTypes;

/**
 * Class CRMImportResult
 *
 * @package Five9WebServices\DataTypes
 */
class CRMFieldCriteria extends FullArray
{
  use \Five9WebServices\Castable;

  /** @var string */
  public $field;
  /** @var string */
  public $value;

  /**
   * CRMFieldCriteria create.
   *
   * @param string $field
   * @param string $value
   *
   * @return CRMFieldCriteria
   */
  public function create($field, $value)
  {
    $crmFieldCriteria = new CRMFieldCriteria();
    $crmFieldCriteria->setField($field);
    $crmFieldCriteria->setValue($value);

    return $crmFieldCriteria;
  }

  /**
   * @return string
   */
  public function getField()
  {
    return $this->field;
  }

  /**
   * @param string $field
   *
   * @return CRMFieldCriteria
   */
  public function setField($field)
  {
    $this->field = $field;

    return $this;
  }

  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }

  /**
   * @param string $value
   *
   * @return CRMFieldCriteria
   */
  public function setValue($value)
  {
    $this->value = $value;

    return $this;
  }


}