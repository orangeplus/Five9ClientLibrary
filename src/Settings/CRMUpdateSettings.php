<?php
namespace orangeplus\Five9WebServices\Settings;

use orangeplus\Five9WebServices\Constants\CRMAddMode;
use orangeplus\Five9WebServices\Constants\CRMUpdateMode;

/**
 * Class CRMUpdateSettings
 *
 * @package Five9WebServices\Settings
 */
class CRMUpdateSettings extends BasicImportSettings
{
  /** @var string */
  protected $crmAddMode = CRMAddMode::DONT_ADD;
  /** @var string */
  protected $crmUpdateMode = CRMUpdateMode::UPDATE_FIRST;

  /**
   * @return array
   */
  public function toArray($record)
  {
    $result = parent::toArray($record);
    $result['crmAddMode'] = $this->crmAddMode;
    $result['crmUpdateMode'] = $this->crmUpdateMode;

    return $result;
  }

  /**
   * @return string
   */
  public function getCrmUpdateMode()
  {
    return $this->crmUpdateMode;
  }

  /**
   * @param string $crmUpdateMode
   */
  public function setCrmUpdateMode($crmUpdateMode)
  {
    $this->crmUpdateMode = $crmUpdateMode;
  }

  /**
   * @return string
   */
  public function getCrmAddMode()
  {
    return $this->crmAddMode;
  }

  /**
   * @param string $crmAddMode
   */
  public function setCrmAddMode($crmAddMode)
  {
    $this->crmAddMode = $crmAddMode;
  }
}