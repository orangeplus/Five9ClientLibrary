<?php
namespace orangeplus\Five9WebServices\Settings;

use Five9WebServices\Constants\ListDeleteModes;
use Five9WebServices\Five9Exception;

/**
 * Class ListDeleteSettings
 *
 * @package Five9WebServices\Settings
 */
class ListDeleteSettings extends BasicImportSettings
{
  /** @var  string $listDeleteMode */
  private $listDeleteMode = 'DELETE_ALL';

  /**
   * @return array
   */
  public function toArray()
  {
    $result = parent::toArray();
    $result['listDeleteMode'] = $this->getListDeleteMode();

    return $result;
  }

  /**
   * @return string
   */
  public function getListDeleteMode()
  {
    return $this->listDeleteMode;
  }

  /**
   * @param string $listDeleteMode
   *
   * @throws Five9Exception
   */
  public function setListDeleteMode($listDeleteMode)
  {
    ListDeleteModes::isValid($listDeleteMode);
    $this->listDeleteMode = $listDeleteMode;
  }


}