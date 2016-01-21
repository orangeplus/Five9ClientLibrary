<?php
namespace orangeplus\Five9WebServices\DataTypes;

/**
 * Class CRMImportResult
 *
 * @package Five9WebServices\DataTypes
 */
class CRMImportResult
{
  use \orangeplus\Five9WebServices\Castable;

  /** @var  int */
  public $crmRecordsDeleted;
  /** @var  int */
  public $crmRecordsInserted;
  /** @var  int */
  public $crmRecordsUpdated;

  /**
   * @return int
   */
  public function getCrmRecordsInserted()
  {
    return $this->crmRecordsInserted;
  }

  /**
   * @param int $crmRecordsInserted
   */
  public function setCrmRecordsInserted($crmRecordsInserted)
  {
    $this->crmRecordsInserted = $crmRecordsInserted;
  }

  /**
   * @return int
   */
  public function getCrmRecordsUpdated()
  {
    return $this->crmRecordsUpdated;
  }

  /**
   * @param int $crmRecordsUpdated
   */
  public function setCrmRecordsUpdated($crmRecordsUpdated)
  {
    $this->crmRecordsUpdated = $crmRecordsUpdated;
  }

  /**
   * @return int
   */
  public function getCrmRecordsDeleted()
  {
    return $this->crmRecordsDeleted;
  }

  /**
   * @param int $crmRecordsDeleted
   */
  public function setCrmRecordsDeleted($crmRecordsDeleted)
  {
    $this->crmRecordsDeleted = $crmRecordsDeleted;
  }


}