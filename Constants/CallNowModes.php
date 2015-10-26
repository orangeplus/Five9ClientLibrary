<?php
namespace Five9WebServices\Constants;

class CallNowModes extends Constant
{
  /**
   * @var string
   * Default. No records are dialed immediately.
   */
  const NONE = 'NONE';
  /**
   * @var string
   * Newly created CRM records are dialed immediately.
   */
  const NEW_CRM_ONLY = 'NEW_CRM_ONLY';
  /**
   * @var string
   * New list records are dialed immediately even
   * if the corresponding CRM records existed before the import.
   */
  const NEW_LIST_ONLY = 'NEW_LIST_ONLY';
  /**
   * @var string
   * All imported records are dialed immediately.
   */
  const ANY = 'ANY';
}