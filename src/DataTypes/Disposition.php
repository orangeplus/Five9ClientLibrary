<?php
namespace orangeplus\Five9WebServices\DataTypes;

use orangeplus\Five9WebServices\Constants\CustomDispositionType;

/**
 * Class Disposition
 *
 * @package Five9WebServices\DataTypes
 */
class Disposition
{
  use \Five9WebServices\Castable;

  /** @var  boolean */
  public $agentMustCompleteWorksheet;
  /** @var  boolean */
  public $agentMustConfirm;
  /** @var  string */
  public $description;
  /** @var  string */
  public $name;
  /** @var  boolean */
  public $resetAttemptsCounter;
  /** @var  boolean */
  public $sendEmailNotification;
  /** @var  boolean */
  public $sendIMNotification;
  /** @var  boolean */
  public $trackAsFirstCallResolution;
  /** @var string CustomDispositionType */
  public $type;
  /** @var  DispositionTypeParams */
  public $typeParameters;

  /**
   * Disposition create.
   *
   * @param string                $name
   * @param string                $description
   * @param string                $type
   * @param DispositionTypeParams $typeParameters
   * @param bool                  $agentMustCompleteWorksheet
   * @param bool                  $agentMustConfirm
   * @param bool                  $resetAttemptsCounter
   * @param bool                  $sendEmailNotification
   * @param bool                  $sendIMNotification
   * @param bool                  $trackAsFirstCallResolution
   *
   * @return Disposition
   */
  public static function create($name, $description, $type,
    DispositionTypeParams $typeParameters,
    $agentMustCompleteWorksheet, $agentMustConfirm,
    $resetAttemptsCounter, $sendEmailNotification,
    $sendIMNotification, $trackAsFirstCallResolution
  ) {
    $disposition = new Disposition();
    $disposition->agentMustCompleteWorksheet = $agentMustCompleteWorksheet;
    $disposition->agentMustConfirm = $agentMustConfirm;
    $disposition->description = $description;
    $disposition->name = $name;
    $disposition->resetAttemptsCounter = $resetAttemptsCounter;
    $disposition->sendEmailNotification = $sendEmailNotification;
    $disposition->sendIMNotification = $sendIMNotification;
    $disposition->trackAsFirstCallResolution = $trackAsFirstCallResolution;
    $disposition->type = $type;
    $disposition->typeParameters = $typeParameters;

    return $disposition;
  }

  /**
   * @return array
   */
  public function __toArray()
  {
    return get_object_vars($this);
  }

  /**
   * @return boolean
   */
  public function isAgentMustCompleteWorksheet()
  {
    return $this->agentMustCompleteWorksheet;
  }

  /**
   * @param boolean $agentMustCompleteWorksheet
   *
   * @return Disposition
   */
  public function setAgentMustCompleteWorksheet($agentMustCompleteWorksheet)
  {
    $this->agentMustCompleteWorksheet = $agentMustCompleteWorksheet;

    return $this;
  }

  /**
   * @return boolean
   */
  public function isAgentMustConfirm()
  {
    return $this->agentMustConfirm;
  }

  /**
   * @param boolean $agentMustConfirm
   *
   * @return Disposition
   */
  public function setAgentMustConfirm($agentMustConfirm)
  {
    $this->agentMustConfirm = $agentMustConfirm;

    return $this;
  }

  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * @param string $description
   *
   * @return Disposition
   */
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param string $name
   *
   * @return Disposition
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * @return boolean
   */
  public function isResetAttemptsCounter()
  {
    return $this->resetAttemptsCounter;
  }

  /**
   * @param boolean $resetAttemptsCounter
   *
   * @return Disposition
   */
  public function setResetAttemptsCounter($resetAttemptsCounter)
  {
    $this->resetAttemptsCounter = $resetAttemptsCounter;

    return $this;
  }

  /**
   * @return boolean
   */
  public function isSendEmailNotification()
  {
    return $this->sendEmailNotification;
  }

  /**
   * @param boolean $sendEmailNotification
   *
   * @return Disposition
   */
  public function setSendEmailNotification($sendEmailNotification)
  {
    $this->sendEmailNotification = $sendEmailNotification;

    return $this;
  }

  /**
   * @return boolean
   */
  public function isSendIMNotification()
  {
    return $this->sendIMNotification;
  }

  /**
   * @param boolean $sendIMNotification
   *
   * @return Disposition
   */
  public function setSendIMNotification($sendIMNotification)
  {
    $this->sendIMNotification = $sendIMNotification;

    return $this;
  }

  /**
   * @return boolean
   */
  public function isTrackAsFirstCallResolution()
  {
    return $this->trackAsFirstCallResolution;
  }

  /**
   * @param boolean $trackAsFirstCallResolution
   *
   * @return Disposition
   */
  public function setTrackAsFirstCallResolution($trackAsFirstCallResolution)
  {
    $this->trackAsFirstCallResolution = $trackAsFirstCallResolution;

    return $this;
  }

  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * @param string $type
   *
   * @return Disposition
   */
  public function setType($type)
  {
    CustomDispositionType::isValid($type);
    $this->type = $type;

    return $this;
  }

  /**
   * @return DispositionTypeParams
   */
  public function getTypeParameters()
  {
    return $this->typeParameters;
  }

  /**
   * @param DispositionTypeParams $typeParameters
   *
   * @return Disposition
   */
  public function setTypeParameters($typeParameters)
  {
    $this->typeParameters = $typeParameters;

    return $this;
  }
}