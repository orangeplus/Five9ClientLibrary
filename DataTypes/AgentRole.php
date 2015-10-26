<?php
namespace Five9WebServices\DataTypes;

/**
 * Class AgentRole
 *
 * @package Five9WebServices\DataTypes
 */
class AgentRole extends FullArray
{
  /** @var AgentPermission[] */
  private $permissions;
  /** @var boolean */
  private $alwaysRecorded = true;
  /** @var boolean */
  private $attachVmToEmail = true;
  /** @var boolean */
  private $sendEmailOnVm = true;

  /**
   * @return boolean
   */
  public function isAlwaysRecorded()
  {
    return $this->alwaysRecorded;
  }

  /**
   * @param boolean $alwaysRecorded
   */
  public function setAlwaysRecorded($alwaysRecorded)
  {
    $this->alwaysRecorded = $alwaysRecorded;
  }

  /**
   * @return boolean
   */
  public function isAttachVmToEmail()
  {
    return $this->attachVmToEmail;
  }

  /**
   * @param boolean $attachVmToEmail
   */
  public function setAttachVmToEmail($attachVmToEmail)
  {
    $this->attachVmToEmail = $attachVmToEmail;
  }

  /**
   * @return boolean
   */
  public function isSendEmailOnVm()
  {
    return $this->sendEmailOnVm;
  }

  /**
   * @param boolean $sendEmailOnVm
   */
  public function setSendEmailOnVm($sendEmailOnVm)
  {
    $this->sendEmailOnVm = $sendEmailOnVm;
  }

  /**
   * @return AgentPermission[]
   */
  public function getPermissions()
  {
    return $this->permissions;
  }

  /**
   * @param AgentPermission[] $permissions
   */
  public function setPermissions($permissions)
  {
    // clear the array
    $this->permissions = [];

    // step through to ensure we do not have dupes
    foreach ($permissions as $permission) {
      $this->addPermission($permission);
    }
  }

  /**
   * @param AgentPermission $permission
   */
  public function addPermission(AgentPermission $permission)
  {
    // Dedupe
    $this->removePermission($permission);
    $this->permissions[] = $permission;
  }

  /**
   * Removes a permission
   * If type is null or not given, it will remove the permission of the same type
   *
   * @param AgentPermission $permission
   * @param boolean|null    $type
   */
  public function removePermission(AgentPermission $permission, $type = null)
  {
    for ($i = 0; $i < count($this->permissions); $i++) {
      if ($permission->getType() == $this->permissions[$i]->getType()) {
        if ($type === null || $type === $this->permissions[$i]->getType()) {
          unset($this->permissions[$i]);
          break;
        }
      }
    }
    // reset the index
    $this->setPermissions(array_values($this->permissions));
  }
}