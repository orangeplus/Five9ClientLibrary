<?php
namespace Five9WebServices\DataTypes;

/**
 * Class AdminRole
 *
 * @package Five9WebServices\DataTypes
 */
class AdminRole extends FullArray
{
  /** @var string[] */
  private $permissions;

  /**
   * @return AdminPermission[]
   */
  public function getPermissions()
  {
    return $this->permissions;
  }

  /**
   * @param AdminPermission[] $permissions
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
   * @param AdminPermission $permission
   */
  public function addPermission(AdminPermission $permission)
  {
    // Dedupe
    $this->removePermission($permission);
    $this->permissions[] = $permission;
  }

  /**
   * Removes a permission
   * If type is null or not given, it will remove the permission of the same type
   *
   * @param AdminPermission $permission
   * @param string|null     $type
   */
  public function removePermission(AdminPermission $permission, $type = null)
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