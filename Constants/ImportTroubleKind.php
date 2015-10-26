<?php
namespace Five9WebServices\Constants;

/**
 * Class ImportTroubleKind
 *
 * @package Five9WebServices\Constants
 */
class ImportTroubleKind extends Constant
{
  /**
   * @var string Error message.
   */
  const PARSE_ERROR = 'ParseError';
  /**
   * @var string Record with the key field that already exists.
   */
  const DUPLICATE_KEY = 'DuplicateKey';
  /**
   * @var string At least one key field should not be empty.
   */
  const ALL_KEY_FIELDS_ARE_EMPTY = 'AllKeyFieldsAreEmpty';
  /**
   * @var string No corresponding contact in the database.
   */
  const NO_MATCHES_IN_CONTACTS = 'NoMatchesInContacts';
  /**
   * @var string
   * Record being imported already exists in CRM. Occurs when
   * CrmUpdateMode=DONT_UPDATE
   */
  const ONE_MATCH_IN_CONTACTS = 'OneMatchInContacts';
  /**
   * @var string
   * Several contacts in the list have the same key value. Not allowed by the
   * settings of another request.
   */
  const MULTIPLE_MATCHES_IN_CONTACTS = 'MultipleMatchesInContacts';
  /**
   * @var string Undefined error.
   */
  const INTERNAL_IMPORT_ERROR = 'InternalImportError';

}