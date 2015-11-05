<?php
namespace orangeplus\Five9WebServices\Settings;

use Five9WebServices\Constants\CRMDeleteMode;
use Five9WebServices\Five9Exception;

/**
 * Class CRMDeleteSettings
 *
 * @package Five9WebServices\DataTypes
 */
class CRMDeleteSettings extends BasicImportSettings
{
  /**@var string $crmDeleteMode */
  private $crmDeleteMode = 'DELETE_ALL';

  /**
   * @param $crmDeleteMode
   *
   * @throws Five9Exception
   */
  public function setCrmDeleteMode($crmDeleteMode)
  {
    CRMDeleteMode::isValid($crmDeleteMode);
    $this->crmDeleteMode = $crmDeleteMode;
  }

  /**
   * @return string
   */
  public function getCrmDeleteMode()
  {
    return $this->crmDeleteMode;
  }

  /**
   * @return array
   */
  public function toArray()
  {
    $result = parent::toArray();
    $result['crmDeleteMode'] = $this->crmDeleteMode;

    return $result;
  }
}