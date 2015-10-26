<?php
namespace Five9WebServices\DataTypes;

/**
 * Class ListImportResult
 *
 * @package Five9WebServices\DataTypes
 */
class ListImportResult
{
  use \Five9WebServices\Castable;

  /** @var  int */
  public $callNowQueued;
  /** @var  int */
  public $crmRecordsInserted;
  /** @var  int */
  public $crmRecordsUpdated;
  /** @var  string */
  public $listName;
  /** @var  int */
  public $listRecordsDeleted;
  /** @var  int */
  public $listRecordsInserted;

  /**
   * @return int
   */
  public function getCallNowQueued()
  {
    return $this->callNowQueued;
  }

  /**
   * @return int
   */
  public function getCrmRecordsInserted()
  {
    return $this->crmRecordsInserted;
  }

  /**
   * @return int
   */
  public function getCrmRecordsUpdated()
  {
    return $this->crmRecordsUpdated;
  }

  /**
   * @return string
   */
  public function getListName()
  {
    return $this->listName;
  }

  /**
   * @return int
   */
  public function getListRecordsDeleted()
  {
    return $this->listRecordsDeleted;
  }

  /**
   * @return int
   */
  public function getListRecordsInserted()
  {
    return $this->listRecordsInserted;
  }
}