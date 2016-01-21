<?php
namespace orangeplus\Five9WebServices\DataTypes;

use \orangeplus\Five9WebServices\Constants\AgentPermissionType;

/**
 * Class AgentPermission
 *
 * @package Five9WebServices\DataTypes
 */
class AgentPermission extends FullArray
{
  /** @var  AgentPermissionType */
  private $type;
  /** @var  boolean */
  private $value;

  /**
   * AdminPermissions constructor.
   *
   * @param AgentPermissionType $type
   * @param bool                $value
   */
  public function __construct(AgentPermissionType $type = null, $value = null)
  {
    $this->type = $type;
    $this->value = $value;
  }

  /**
   * @return AgentPermissionType
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * @param AgentPermissionType $type
   *
   * @return AdminPermission
   */
  public function setType($type)
  {
    AgentPermissionType::isValid($type);
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