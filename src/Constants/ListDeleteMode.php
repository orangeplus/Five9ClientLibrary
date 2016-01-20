<?php
namespace orangeplus\Five9WebServices\Constants;

/**
 * Class ListDeleteModes
 *
 * @package Five9WebServices\Constants
 */
class ListDeleteModes extends Constant
{
  /**
   * @var string
   * Delete all records. Does not apply to single record transactions, such as
   * with the deleteRecordFromList method.
   */
  const DELETE_ALL = 'DELETE_ALL';
  /**
   * @var string Delete only if a single match is found in the database
   */
  const DELETE_IF_SOLE_CRM_MATCH = 'DELETE_IF_SOLE_CRM_MATCH';
  /**
   * @var string Delete all records except the first matched record.
   */
  const DELETE_EXCEPT_FIRST = 'DELETE_EXCEPT_FIRST';
}