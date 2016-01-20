<?php
namespace orangeplus\Five9WebServices\Constants;

/**
 * Class SayAs
 *
 * @package Five9WebServices\Constants
 */
class SayAs extends Constant
{
  /**
   * @var string
   *
   */
  const _DEFAULT = 'Default';
  /**
   * @var string
   * Word strings are spoken as words instead of being pronounced as
   * strings of individual letters and digits. However, the characters of a word
   * may be spoken individually when character sequences are particularly
   * difficult to pronounce. Meant for acronyms to be read as words.
   */
  const WORDS = 'Words';
  /**
   * @var string
   * Letters and/or digits, such as NATO and UNESCO in English, that are spoken
   * as words when considered natural in the target language. Otherwise, letters
   * and digits are pronounced individually, for example: API in English. Use
   * detail strict to force spelling mode. In that case, punctuation is also
   * spoken, for example: speaking a comma as comma. Acronym with detail strict
   * is equivalent to letters with detail strict.
   */
  const ACRONYM = 'Acronym';
  /**
   * @var string Postal addresses
   */
  const ADDRESS = 'Address';
  /**
   * @var string
   * Supported if relevant in the target language. Roman cardinals are often
   * supported.
   */
  const CARDINAL = 'Cardinal';
  /**
   * @var string
   * Text is a currency amount with or without the currency symbol. Supports
   * currencies commonly specified in the country corresponding to the target
   * language.
   */
  const CURRENCY = 'Currency';
  /**
   * @var string
   */
  const DATE = 'Date';
  /**
   * @var string
   * Same as number with format decimal. The separator for the integral part is
   * optional. For example, in U.S. English, 123456.123 and 123,456.123 are
   * pronounced in the same way
   */
  const DECIMAL = 'Decimal';
  /**
   * @var string
   * Same as number with format digits. Numbers must be read digit by digit,
   * including decimal periods and commas.
   */
  const DIGITS = 'Digits';
  /**
   * @var string
   * For example, duration with format hms is read as <h> hour(s),
   * <m> minute(s), and <s> seconds.
   */
  const DURATION = 'Duration';
  /**
   * @var string Same as number with format fraction. For example, pronounce
   * 1/3 as one third.
   */
  const FRACTION = 'Fraction';
  /**
   * @var string
   * Strings are pronounced as sequence of single letters and/or
   * digits. With detail strict punctuation is also spoken, for example: speaking
   * a comma as comma. Letters with detail strict is equivalent to acronym with
   * detail strict. For true spelling of all readable characters, use the
   * interpret-as value spell.
   */
  const LETTERS = 'Letters';
  /**
   * @var string
   * Many units, such as km, hr, dB, lb, or MHz, are supported. Units may appear
   * immediately next to a number, such as 1cm, or be separated by a space, such
   * as 15 ms. For some units, the distinction between singular and plural may
   * not always be made correctly.
   */
  const MEASURE = 'Measure';
  /**
   * @var string Interpret a string as a proper name if possible.
   */
  const NAME = 'Name';
  /**
   * @var string Email can be used for email addresses
   */
  const NET = 'Net';
  /**
   * @var string
   * Supports phone numbers specified in the country corresponding
   * to the target language. See the language specific User Guide for a list of
   * the supported formats. Use detail="punctuation" to speak punctuation, such
   * as speaking a dash as dash.
   */
  const TELEPHONE = 'Telephone';
  /**
   * @var string
   * Same as number with format ordinal. See the language-specific
   * User's Guide for a list of the supported formats.
   */
  const ORDINAL = 'Ordinal';
  /**
   * @var string
   * Characters in text string are pronounced as individual characters.
   */
  const SPELL = 'Spell';
  /**
   * @var string
   * Hour should be less than 24; minutes and seconds should be less than 60;
   * AM/PM is read out only if explicitly specified. See the language-specific
   * User's Guide for a list of the supported formats.
   */
  const TIME = 'Time';
}