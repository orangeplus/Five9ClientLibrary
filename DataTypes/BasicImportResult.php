<?php
namespace Five9WebServices\DataTypes;

/**
 * Class BasicImportResult
 *
 * @package Five9WebServices\DataTypes
 */
class BasicImportResult
{
  use \Five9WebServices\Castable;

  /** @var  string */
  public $failureMessage;
  /** @var  ImportTrouble */
  public $importTroubles;
  /** @var  array */
  public $keyFields;
  /** @var  int */
  public $uploadDuplicatesCount;
  /** @var  int */
  public $uploadErrorsCount;
  /** @var  int */
  public $warningsCount;

  /**
   * @return string
   */
  public function getFailureMessage()
  {
    return $this->failureMessage;
  }

  /**
   * @return ImportTrouble
   */
  public function getImportTroubles()
  {
    return $this->importTroubles;
  }

  /**
   * @return array
   */
  public function getKeyFields()
  {
    return $this->keyFields;
  }

  /**
   * @return int
   */
  public function getUploadDuplicatesCount()
  {
    return $this->uploadDuplicatesCount;
  }

  /**
   * @return int
   */
  public function getUploadErrorsCount()
  {
    return $this->uploadErrorsCount;
  }

  /**
   * @return int
   */
  public function getWarningsCount()
  {
    return $this->warningsCount;
  }


}