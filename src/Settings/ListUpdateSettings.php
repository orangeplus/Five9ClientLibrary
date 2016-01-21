<?php
namespace orangeplus\Five9WebServices\Settings;

use \orangeplus\Five9WebServices\Constants\CallNowModes;
use \orangeplus\Five9WebServices\Constants\CRMAddMode;
use \orangeplus\Five9WebServices\Constants\CRMUpdateMode;
use \orangeplus\Five9WebServices\Constants\ListAddMode;
use \orangeplus\Five9WebServices\Five9Exception;

/**
 * Class ListUpdateSettings
 *
 * @package Five9WebServices\DataTypes
 */
class ListUpdateSettings extends BasicImportSettings
{
  /** @var int $callNowColumnNumber */
  private $callNowColumnNumber = null;
  /** @var string $callNowMode */
  private $callNowMode = CallNowModes::NEW_LIST_ONLY;
  /** @var \DateTime $callTime */
  private $callTime = null;
  /** @var int $callTimeColumnNumber */
  private $callTimeColumnNumber = null;
  /** @var bool $cleanListBeforeUpdate - if true, list is emptied before update */
  private $cleanListBeforeUpdate = false;
  /** @var string $crmAddMode */
  private $crmAddMode = CRMAddMode::ADD_NEW;
  /** @var string $crmUpdateMode */
  private $crmUpdateMode = CRMUpdateMode::UPDATE_FIRST;
  /** @var string $listAddMode */
  private $listAddMode = ListAddMode::ADD_IF_SOLE_CRM_MATCH;

  /**
   * @return array
   */
  public function toArray()
  {
    $result = parent::toArray();
    $result['cleanListBeforeUpdate']
      = ($this->isCleanListBeforeUpdate()) ? "true" : false;
    $result['crmAddMode'] = $this->getCrmAddMode();
    $result['crmUpdateMode'] = $this->getCrmUpdateMode();
    $result['listAddMode'] = $this->getListAddMode();

    return $result;
  }

  /**
   * @return int
   */
  public function getCallNowColumnNumber()
  {
    return $this->callNowColumnNumber;
  }

  /**
   * @param int $callNowColumnNumber
   */
  public function setCallNowColumnNumber($callNowColumnNumber)
  {
    $this->callNowColumnNumber = $callNowColumnNumber;
  }

  /**
   * @return boolean
   */
  public function getCallNowMode()
  {
    return $this->callNowMode;
  }

  /**
   * @param boolean $callNowMode
   *
   * @throws Five9Exception
   */
  public function setCallNowMode($callNowMode)
  {
    CallNowModes::isValid($callNowMode);
    $this->callNowMode = $callNowMode;
  }

  /**
   * @return mixed
   */
  public function getCallTime()
  {
    return $this->callTime;
  }

  /**
   * @param \DateTime $callTime
   */
  public function setCallTime(\DateTime $callTime = null)
  {
    $this->callTime = $callTime;
  }

  /**
   * @return mixed
   */
  public function getCallTimeColumnNumber()
  {
    return $this->callTimeColumnNumber;
  }

  /**
   * @param mixed $callTimeColumnNumber
   */
  public function setCallTimeColumnNumber($callTimeColumnNumber = null)
  {
    $this->callTimeColumnNumber = $callTimeColumnNumber;
  }

  /**
   * @return boolean
   */
  public function isCleanListBeforeUpdate()
  {
    return $this->cleanListBeforeUpdate;
  }

  /**
   * @param boolean $cleanListBeforeUpdate
   */
  public function setCleanListBeforeUpdate($cleanListBeforeUpdate = false)
  {
    $this->cleanListBeforeUpdate = $cleanListBeforeUpdate;
  }

  /**
   * @return mixed
   */
  public function getCrmAddMode()
  {
    return $this->crmAddMode;
  }

  /**
   * @param mixed $crmAddMode
   *
   * @throws Five9Exception
   */
  public function setCrmAddMode($crmAddMode)
  {
    CRMAddMode::isValid($crmAddMode);
    $this->crmAddMode = $crmAddMode;
  }

  /**
   * @return mixed
   */
  public function getCrmUpdateMode()
  {

    return $this->crmUpdateMode;
  }

  /**
   * @param mixed $crmUpdateMode
   *
   * @throws Five9Exception
   */
  public function setCrmUpdateMode($crmUpdateMode)
  {
    CRMUpdateMode::isValid($crmUpdateMode);
    $this->crmUpdateMode = $crmUpdateMode;
  }

  /**
   * @return mixed
   */
  public function getListAddMode()
  {
    return $this->listAddMode;
  }

  /**
   * @param mixed $listAddMode
   *
   * @throws Five9Exception
   */
  public function setListAddMode($listAddMode)
  {
    ListAddMode::isValid($listAddMode);
    $this->listAddMode = $listAddMode;
  }
}