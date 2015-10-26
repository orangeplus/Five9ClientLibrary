<?php
namespace Five9WebServices\DataTypes;

/**
 * Class ImportTroubles
 *
 * @package Five9WebServices\DataTypes
 */
class ImportTroubles
{
  use \Five9WebServices\Castable;

  /** @var  \string[] */
  public $key;
  /** @var string ImportTroubleKind */
  public $kind;
  /** @var  int */
  public $rowNumber;
  /** @var string */
  public $troubleMessage;

  /**
   * @return \string[]
   */
  public function getKey()
  {
    return $this->key;
  }

  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }

  /**
   * @return int
   */
  public function getRowNumber()
  {
    return $this->rowNumber;
  }

  /**
   * @return string
   */
  public function getTroubleMessage()
  {
    return $this->troubleMessage;
  }
}