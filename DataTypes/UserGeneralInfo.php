<?php
namespace orangeplus\Five9WebServices\DataTypes;

/**
 * Class UserGeneralInfo
 *
 * @package Five9WebServices\DataTypes
 */
class UserGeneralInfo extends FullArray
{
  use \Five9WebServices\Castable;

  /** @var boolean */
  private $active;
  /** @var boolean */
  private $canChangePassword;
  /** @var string */
  private $EMail;
  /** @var int */
  private $extension;
  /** @var string */
  private $firstName;
  /** @var string */
  private $fullName;
  /** @var boolean */
  private $IEXScheduled;
  /** @var int */
  private $id;
  /** @var string */
  private $lastName;
  /** @var boolean */
  private $mustChangePassword;
  /** @var string */
  private $osLogin;
  /** @var string */
  private $password;
  /** @var \DateTime */
  private $startDate;
  /** @var string */
  private $userName;
  /** @var string */
  private $userProfileName;

  /**
   * @return boolean
   */
  public function isActive()
  {
    return $this->active;
  }

  /**
   * @param boolean $active
   *
   * @return UserGeneralInfo
   */
  public function setActive($active)
  {
    $this->active = $active;

    return $this;
  }

  /**
   * @return boolean
   */
  public function isCanChangePassword()
  {
    return $this->canChangePassword;
  }

  /**
   * @param boolean $canChangePassword
   *
   * @return UserGeneralInfo
   */
  public function setCanChangePassword($canChangePassword)
  {
    $this->canChangePassword = $canChangePassword;

    return $this;
  }

  /**
   * @return string
   */
  public function getEMail()
  {
    return $this->EMail;
  }

  /**
   * @param string $EMail
   *
   * @return UserGeneralInfo
   */
  public function setEMail($EMail)
  {
    $this->EMail = $EMail;

    return $this;
  }

  /**
   * @return int
   */
  public function getExtension()
  {
    return $this->extension;
  }

  /**
   * @param int $extension
   *
   * @return UserGeneralInfo
   */
  public function setExtension($extension)
  {
    $this->extension = $extension;

    return $this;
  }

  /**
   * @return string
   */
  public function getFirstName()
  {
    return $this->firstName;
  }

  /**
   * @param string $firstName
   *
   * @return UserGeneralInfo
   */
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;

    return $this;
  }

  /**
   * @return string
   */
  public function getFullName()
  {
    return $this->fullName;
  }

  /**
   * @param string $fullName
   *
   * @return UserGeneralInfo
   */
  public function setFullName($fullName)
  {
    $this->fullName = $fullName;

    return $this;
  }

  /**
   * @return boolean
   */
  public function isIEXScheduled()
  {
    return $this->IEXScheduled;
  }

  /**
   * @param boolean $IEXScheduled
   *
   * @return UserGeneralInfo
   */
  public function setIEXScheduled($IEXScheduled)
  {
    $this->IEXScheduled = $IEXScheduled;

    return $this;
  }

  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param int $id
   *
   * @return UserGeneralInfo
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * @return string
   */
  public function getLastName()
  {
    return $this->lastName;
  }

  /**
   * @param string $lastName
   *
   * @return UserGeneralInfo
   */
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;

    return $this;
  }

  /**
   * @return boolean
   */
  public function isMustChangePassword()
  {
    return $this->mustChangePassword;
  }

  /**
   * @param boolean $mustChangePassword
   *
   * @return UserGeneralInfo
   */
  public function setMustChangePassword($mustChangePassword)
  {
    $this->mustChangePassword = $mustChangePassword;

    return $this;
  }

  /**
   * @return string
   */
  public function getOsLogin()
  {
    return $this->osLogin;
  }

  /**
   * @param string $osLogin
   *
   * @return UserGeneralInfo
   */
  public function setOsLogin($osLogin)
  {
    $this->osLogin = $osLogin;

    return $this;
  }

  /**
   * @return string
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * @param string $password
   *
   * @return UserGeneralInfo
   */
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getStartDate()
  {
    return $this->startDate;
  }

  /**
   * @param \DateTime $startDate
   *
   * @return UserGeneralInfo
   */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;

    return $this;
  }

  /**
   * @return string
   */
  public function getUserName()
  {
    return $this->userName;
  }

  /**
   * @param string $userName
   *
   * @return UserGeneralInfo
   */
  public function setUserName($userName)
  {
    $this->userName = $userName;

    return $this;
  }

  /**
   * @return string
   */
  public function getUserProfileName()
  {
    return $this->userProfileName;
  }

  /**
   * @param string $userProfileName
   *
   * @return UserGeneralInfo
   */
  public function setUserProfileName($userProfileName)
  {
    $this->userProfileName = $userProfileName;

    return $this;
  }


}