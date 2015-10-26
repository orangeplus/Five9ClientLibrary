<?php
namespace Five9WebServices\Constants;

class CRMDeleteMode extends Constant
{
  /**
   * @var string
   * Delete all records. Does not apply to single record
   * transactions, such as when using the deleteRecordFromList method.
   */
  const DELETE_ALL = 'DELETE_ALL';

  /**
   * @var string Delete only single matches.
   */
  const DELETE_SOLE_MATCHES = 'DELETE_SOLE_MATCHES';

  /**
   * @var string Delete all records except the first matching record.
   */
  const DELETE_EXCEPT_FIRST = 'DELETE_EXCEPT_FIRST';
}