<?php
namespace Five9WebServices\Constants;

/**
 * Class DispositionsUpdateMode
 *
 * @package Five9WebServices\Constants
 */
class DispositionsUpdateMode extends Constant
{
  /**
   * @var string Update disposition for all records that match the key.
   */
  const UPDATE_ALL = 'UPDATE_ALL';
  /**
   * @var string Update disposition if only one record matches the key. Otherwise, request for update is denied.
   */
  const UPDATE_IF_SOLE_CRM_MATCH = 'UPDATE_IF_SOLE_CRM_MATCH';

}