<?php
namespace orangeplus\Five9WebServices\Constants;


class CRMAddMode extends Constant
{
  /**
   * @var string
   * Contact records are created in the contact database and
   * are added to the dialing list.
   */
  const ADD_NEW = 'ADD_NEW';
  /**
   * @var string
   * Records are added to the dialing list but no records
   * are created in the contact database.
   */
  const DONT_ADD = 'DONT_ADD';
}