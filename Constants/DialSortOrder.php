<?php
namespace Five9WebServices\Constants;

/**
 * Class DialSortOrder
 *
 * @package Five9WebServices\Constants
 */
class DialSortOrder extends Constant
{
  /**
   * @var string Last in, first out: newest added called first.
   */
  const LIFO = 'LIFO';
  /**
   * @var string First in, first out.
   */
  const FIFO = 'FIFO';
  /**
   * @var string Sort order of the campaign profile.
   */
  const CONTACT_FIELDS = 'ContactFields';
}