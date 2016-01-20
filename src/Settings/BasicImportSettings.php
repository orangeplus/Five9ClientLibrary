<?php
namespace orangeplus\Five9WebServices\Settings;

/**
 * Class BasicImportSettings
 *
 * @package   Five9WebServices\DataTypes
 * @author   Keith Rockhold <keith@keithrockhold.com>
 */
class BasicImportSettings extends FieldMapped
{
  /** @var bool $allowDataCleanup Whether to remove duplicate entries from a list */
  protected $allowDataCleanup = true;
  /** @var string $countryCode */
  protected $countryCode = 'US';
  /** @var bool $failOnFieldParseError Whether to stop the import if incorrect data is found: */
  protected $failOnFieldParseError = true;
  /** @var string $reportEmail Notification about import results is sent by email. Best if injected somewhere */
  protected $reportEmail = '';
  /** @var string $separator */
  protected $separator = ',';
  /** @var bool Whether to omit the top row that contains the names of the fields */
  protected $skipHeaderLine = false;


  /**
   * @param string $reportEmail
   *
   * @return $this
   */
  public function setReportEmail($reportEmail)
  {
    $this->reportEmail = $reportEmail;

    return $this;
  }

  /**
   * @return string
   */
  public function getReportEmail()
  {
    return $this->reportEmail;
  }

  /**
   * @return boolean
   */
  public function isAllowDataCleanup()
  {
    return $this->allowDataCleanup;
  }

  /**
   * @param boolean $allowDataCleanup
   *
   * @return BasicImportSettings
   */
  public function setAllowDataCleanup($allowDataCleanup)
  {
    $this->allowDataCleanup = $allowDataCleanup;

    return $this;
  }

  /**
   * @return array
   */
  public function toArray()
  {
    return [
      'allowDataCleanup'      => ($this->allowDataCleanup) ? "true" : "false",
      'skipHeaderLine'        => ($this->skipHeaderLine) ? "true" : "false",
      'failFieldOnParseError' => ($this->failOnFieldParseError) ? "true" : "false",
      'fieldsMapping'         => $this->fieldsMapping
    ];
  }
}
