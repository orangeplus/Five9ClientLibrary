<?php
namespace orangeplus\Five9WebServices\Constants;

/**
 * Class ListAddMode
 *
 * @package Five9WebServices\Constants
 */
class ListAddMode extends Constant
{
  /**
   * @var string
   * Adds the first record when matches exist.
   */
  const ADD_FIRST = 'ADD_FIRST';
  /**
   * @var string
   * Add all records. Does not apply to asynchronous transactions,
   * such as with the addRecordToList and asyncAddRecordsToList methods.
   */
  const ADD_ALL = 'ADD_ALL';
  /**
   * @var string Add record if only one match exists in the database.
   */
  const ADD_IF_SOLE_CRM_MATCH = 'ADD_IF_SOLE_CRM_MATCH';
}