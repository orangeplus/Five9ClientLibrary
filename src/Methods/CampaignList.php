<?php
namespace orangeplus\Five9WebServices\Methods;

use \orangeplus\Five9WebServices\Five9Exception;
use \orangeplus\Five9WebServices\Contact;
use \orangeplus\Five9WebServices\DataTypes\ListImportResult;
use \orangeplus\Five9WebServices\Settings\ListUpdateSettings;
use \orangeplus\Five9WebServices\Settings\ListDeleteSettings;
use \orangeplus\Five9WebServices\Settings\ListUpdateSimpleSettings;

/**
 * Class CampaignList
 *
 * @package Five9WebServices\Methods
 */
class CampaignList extends Methods
{
  /**
   * Add numbers to Do Not Call list
   *
   * @param string[] $numbers
   *
   * @return int number of numbers successfully added to DNC
   * @throws Five9Exception
   */
  public function addNumbersToDnc($numbers)
  {
    $data = array('numbers' => $numbers);
    try {
      $result = $this->client->addNumbersToDnc($data);

      return $result;
    } catch (\SoapFault $e) {
      throw new Five9Exception('SOAP ERROR '.$e->getMessage());
    }
  }

  /**
   * Add a record to five9 and to a list
   *
   * @param string             $listName
   * @param Contact         $record
   * @param ListUpdateSettings $listUpdateSettings
   *
   * @return mixed
   * @throws Five9Exception
   */
  function addRecordToList($listName, Contact $record,
    $listUpdateSettings = null
  ) {
    $listUpdateSettings = ($listUpdateSettings)
      ?: new ListUpdateSettings(
        $record
      );

    $data = array(
      'listName'           => $listName,
      'listUpdateSettings' => $listUpdateSettings->toArray(),
      'record'             => $record->getFieldMappedValues()
    );

    try {
      $result = $this->client->addRecordToList($data);

      return ListImportResult::cast($result);
    } catch (\SoapFault $e) {
      throw new Five9Exception('SOAP ERROR '.$e->getMessage());
    }
  }

  /**
   * @param string                   $listName
   * @param ListUpdateSimpleSettings $listUpdateSimpleSettings
   * @param Contact               $record
   *
   * @return mixed
   * @throws Five9Exception
   */
  function addRecordToListSimple(
    $listName,
    $record,
    $listUpdateSimpleSettings = null
  ) {

    if (!$listUpdateSimpleSettings) {
      $listUpdateSimpleSettings = new ListUpdateSimpleSettings($record);
    }

    $data = array(
      'listName'                 => $listName,
      'listUpdateSimpleSettings' => $listUpdateSimpleSettings->toArray(),
      'record'                   => $record->getFieldMappedValues()
    );

    try {
      $result = $this->client->addRecordToListSimple($data);
      return $result;
    } catch (\SoapFault $e) {
      throw new Five9Exception('SOAP ERROR '.$e->getMessage());
    }
  }

  /**
   * Add a contact to a list
   * For performing large numbers of inserts - should not be used during
   * normal business hours
   *
   * @param string             $listName
   * @param ListUpdateSettings $listUpdateSettings
   * @param Contact         $importData
   *
   * @return string
   * @throws Five9Exception
   */
  function addToList($listName, Contact $importData,
    $listUpdateSettings = null
  ) {
    $listUpdateSettings = ($listUpdateSettings)
      ?: new ListUpdateSettings(
        $importData
      );

    $data = array(
      'listName'           => $listName,
      'listUpdateSettings' => $listUpdateSettings->toArray(),
      'importData'         => $importData->getFieldMappedValues()
    );

    try {
      $result = $this->client->addtoList($data);

      return $result;
    } catch (\SoapFault $e) {
      throw new Five9Exception('SOAP ERROR '.$e->getMessage());
    }
  }

  /**
   * @param string             $listName
   * @param Contact[]       $csvData
   * @param ListUpdateSettings $listUpdateSettings
   *
   * @return string
   * @throws Five9Exception
   */
  function addToListCsv($listName, $csvData, $listUpdateSettings = null)
  {
    $listUpdateSettings = ($listUpdateSettings) ?: new ListUpdateSettings();
    $payload = [];
    foreach ($csvData as $contact) {
      $payload[] = $contact->toCsv();
    }

    $data = array(
      'listName'           => $listName,
      'listUpdateSettings' => $listUpdateSettings->toArray(),
      'csvData'            => $payload
    );

    try {
      $result = $this->client->addtoListCsv($data);

      return $result;
    } catch (\SoapFault $e) {
      throw new Five9Exception('SOAP ERROR '.$e->getMessage());
    }
  }

  /**
   * @param string             $listName
   * @param Contact[]       $importData
   * @param ListUpdateSettings $listUpdateSettings
   *
   * @return mixed
   * @throws Five9Exception
   */
  function asyncAddRecordsToList($listName, $importData,
    $listUpdateSettings = null
  ) {
    if (count($importData) > 100) {
      throw new Five9Exception('Too many records, max is 100');
    }

    $listUpdateSettings = ($listUpdateSettings)
      ?: new ListUpdateSettings(
        $importData[0]
      );
    // get a formatted array
    foreach ($importData as $contact) {
      $records[] = $contact->getFieldMappedValues();
    }

    $data = array(
      'listName'           => $listName,
      'listUpdateSettings' => $listUpdateSettings->toArray(),
      'importData'         => $records
    );
    try {
      $result = $this->client->asyncAddRecordsToList($data);

      return $result;
    } catch (\SoapFault $e) {
      throw new Five9Exception('SOAP ERROR '.$e->getMessage());
    }
  }

  /**
   * @param string $listName
   * @param string $reportEmail
   *
   * @return string
   */
  function deleteAllFromList($listName, $reportEmail)
  {
    $data = array(
      'listName'    => $listName,
      'reportEmail' => $reportEmail
    );
    $result = $this->client->deleteAllFromList($data);
    return $result;
  }

  /**
   * @param string             $listName
   * @param ListDeleteSettings $listDeleteSettings
   * @param Contact[]       $importData
   *
   * @return string
   */
  function deleteFromList($listName, $importData, $listDeleteSettings = null)
  {
    $listDeleteSettings = ($listDeleteSettings)
      ?: new ListDeleteSettings(
        $importData[0]
      );
    $listDeleteSettings->setFieldsMapping(
      $importData[0]->getFieldMappingArray(false)
    );

    $data = array(
      'listName'           => $listName,
      'listDeleteSettings' => $listDeleteSettings->toArray(),
      'importData'         => array($importData->toArray())
    );
    $result = $this->client->deleteFromList($data);

    return $result;
  }

  /**
   * @param $listName
   * @param $listDeleteSettings
   * @param $csvData
   *
   * @return string
   */
  function deleteFromListCsv($listName, $csvData, $listDeleteSettings = null)
  {
    $listDeleteSettings = ($listDeleteSettings) ?: new ListDeleteSettings();
    $data = array(
      'listName'           => $listName,
      'listDeleteSettings' => $listDeleteSettings->toArray(),
      'csvData'            => $csvData
    );
    $result = $this->client->deleteFromListCsv($data);

    return $result;
  }

  /**
   * Removes a contact from a list
   *
   * @param string             $listName
   * @param Contact         $record
   * @param ListDeleteSettings $listDeleteSettings
   *
   * @return ListImportResult
   * @throws Five9Exception
   */
  function deleteRecordFromList($listName, $record, $listDeleteSettings = null)
  {
    $listDeleteSettings = ($listDeleteSettings) ?: new ListDeleteSettings();
    $listDeleteSettings->setFieldsMapping($record->getFieldMappingArray(false));

    $data = array(
      'listName'           => $listName,
      'listDeleteSettings' => $listDeleteSettings->toArray(),
      'record'             => array_values(
        $record->getDeleteFieldMappedValues()
      )
    );

    try {
      $result = $this->client->deleteRecordFromList($data);

      return ListImportResult::cast($result);
    } catch (\SoapFault $e) {
      throw new Five9Exception('SOAP ERROR '.$e->getMessage());
    }
  }

  /**
   * @param string $listNamePattern
   *
   * @return mixed
   */
  function getListsInfo($listNamePattern)
  {
    $data = array(
      'listNamePattern' => $listNamePattern
    );
    $result = $this->client->getListsInfo($data);

    return $result;
  }
}

