<?php
namespace orangeplus\Five9WebServices\Methods;

use orangeplus\Five9WebServices\Five9Exception;
use orangeplus\Five9WebServices\Contact;
use orangeplus\Five9WebServices\DataTypes\CRMImportResult;
use orangeplus\Five9WebServices\Settings\CRMUpdateSettings;
use orangeplus\Five9WebServices\Settings\CRMDeleteSettings;


/**
 * Class Contact
 *
 * @package Five9WebServices\Methods
 */
class Contact extends Methods
{
  /**
   * Delete contact from Five9
   *
   * @param Contact $record
   * @param CRMDeleteSettings $crmDeleteSettings
   *
   * @return mixed
   * @throws Five9Exception
   */
  function deleteFromContacts($record, $crmDeleteSettings = null)
  {
    $crmDeleteSettings = ($crmDeleteSettings) ?: new CRMDeleteSettings($record);
    $crmDeleteSettings->setFieldsMapping($record->getFieldMappingArray(false));

    $data = array(
      'crmDeleteSettings' => $crmDeleteSettings,
      'importData'        => array(array_values(
                                     $record->getDeleteFieldMappedValues()
                                   ))
    );

    try {
      $result = $this->client->deleteFromContacts($data);

      return $result;
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }
  }

  /**
   * Delete a collection of contacts
   *
   * @param CRMDeleteSettings $crmDeleteSettings Array contains crmDeleteMode
   * @param array             $data              Array of csv with proper fieldMapping
   *
   * @return object[]
   */
  function deleteFromContactsCsv($data, $crmDeleteSettings)
  {
    if ($crmDeleteSettings == null) {
      $settings = new CRMDeleteSettings();
      $crmDeleteSettings = $settings->toArray($data);
    }

    $data = array(
      'crmDeleteSettings' => $crmDeleteSettings,
      'csvData'           => $data
    );

    $result = $this->client->deleteFromContactsCsv($data);
    $result = $this->checkImport($result, 'getCrmImportResult');

    return $result;
  }

  /**
   * Get contact records
   *
   * @param array $lookupCriteria field->value pairs to lookup
   *
   * @return object
   */
  function getContactRecords($lookupCriteria = null)
  {
    $query = array('lookupCriteria' => $lookupCriteria);
    $result = $this->client->getContactRecords($query);

    return $result;
  }

  /**
   * @param CRMUpdateSettings $crmUpdateSettings
   * @param array             $importData Array matches field values for fieldMapping
   *
   * @return object
   */
  function updateContacts($importData, $crmUpdateSettings = null)
  {
    if ($crmUpdateSettings == null) {
      $settings = new CRMUpdateSettings();
      $crmUpdateSettings = $settings->toArray($importData);
    }

    $result = $this->client->updateContacts(
      array(
        'crmUpdateSettings' => $crmUpdateSettings,
        'importData'        => $importData,
      )
    );

    return $result;
  }

  /**
   * @param CRMUpdateSettings $crmUpdateSettings
   * @param array             $csvData
   *
   * @return object[]
   */
  function updateContactsCsv($csvData, $crmUpdateSettings = null)
  {
    if ($crmUpdateSettings == null) {
      $settings = new CRMUpdateSettings();
      $crmUpdateSettings = $settings->toArray($csvData);
    }

    $data = array(
      'crmUpdateSettings' => $crmUpdateSettings,
      'csvData'           => $csvData
    );
    $result = $this->client->updateContactsCsv($data);
    $result = $this->checkImport($result, 'getCrmImportResult');

    return $result;
  }

  /**
   * @param CRMUpdateSettings $crmUpdateSettings
   * @param Contact        $record
   *
   * @throws Five9Exception
   *
   * @return CRMImportResult
   */
  function updateCrmRecord(Contact $record, $crmUpdateSettings = null)
  {
    $crmUpdateSettings = ($crmUpdateSettings) ?: new CRMUpdateSettings();
    $crmUpdateSettings->setFieldsMapping($record->getFieldMappingArray());

    $data = array(
      'crmUpdateSettings' => $crmUpdateSettings,
      'record'            => $record->getFieldMappedValues()
    );

    try {
      $result = $this->client->updateCrmRecord($data);
    } catch (\SoapFault $e) {
      throw new Five9Exception('SOAP ERROR '.$e->getMessage());
    }

    return CRMImportResult::cast($result);
  }


  /**
   * @param $field
   *
   * @return mixed
   */
  function createContactField($field)
  {
    $result = $this->client->createContactField($field);

    return $result;
  }

  /**
   * @param $field
   *
   * @return mixed
   */
  function modifyContactField($field)
  {
    $result = $this->client->modifyContactField($field);

    return $result;
  }

  /**
   * @param string $namePattern regex for contact fields.. returns all if omitted
   *
   * @return object[]
   */
  function getContactFields($namePattern = null)
  {
    $result = $this->client->getContactFields($namePattern);
    $result = $this->returnVariables($result);

    return $result;
  }

  //for calls including identifier
  /**
   * @param $fieldName
   *
   * @return mixed
   */
  function deleteContactField($fieldName)
  {
    $result = $this->client->deleteContactField($fieldName);

    return $result;
  }

}

