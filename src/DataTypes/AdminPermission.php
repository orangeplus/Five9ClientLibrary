<?php
namespace orangeplus\Five9WebServices\DataTypes;

use \orangeplus\Five9WebServices\Constants\AdminPermissionType;

/**
 * Class AdminPermissions
 *
 * @package Five9WebServices\DataTypes
 */
class AdminPermission extends FullArray
{
  /** @var string */
  private $type;
  /** @var  boolean */
  private $value;

  /**
   * AdminPermissions constructor.
   *
   * @param string $type
   * @param bool   $value
   */
  public function __construct($type = null, $value = null)
  {
    $this->type = $type;
    $this->value = $value;
  }

  /**
   * @return AdminPermissionType
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * @param string $type
   *
   * @return AdminPermission
   */
  public function setType($type)
  {
    AdminPermissionType::isValid($type);
    $this->type = $type;

    return $this;
  }

  /**
   * @return boolean
   */
  public function isValue()
  {
    return $this->value;
  }

  /**
   * @param boolean $value
   *
   * @return AdminPermission
   */
  public function setValue($value)
  {
    $this->value = $value;

    return $this;
  }
}