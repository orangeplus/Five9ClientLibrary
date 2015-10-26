<?php
namespace Five9WebServices\Constants;

class CRMUpdateMode extends Constant
{
  /**
   * @var string  Update the first matched record.
   */
  const UPDATE_FIRST = 'UPDATE_FIRST';
  /**
   * @var string
   * Update all matched records. Does not apply to single record
   * transactions, such as with the updateCrmRecord method.
   */
  const UPDATE_ALL = 'UPDATE_ALL';
  /**
   * @var string Update only if one matched record is found.
   */
  const UPDATE_SOLE_MATCHES = 'UPDATE_SOLE_MATCHES';
  /**
   * @var string Do not update any record.
   */
  const DONT_UPDATE = 'DONT_UPDATE';

}