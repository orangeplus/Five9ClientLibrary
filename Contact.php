<?php
namespace Five9WebServices;

/**
 * Class Contact
 * Example adapter class
 * \Container would be a dependency container
 *
 * @package   Five9WebServices
 * @author   Keith Rockhold <keith@keithrockhold.com>
 *
 */
class Contact
{
  /** @var string date format expected by Five9 API*/
  const DATE_TIME_FORMAT = "Y-m-d H:i:00.000";

  // array of field names used as id fields for updating CRM record
  public static $ID_FIELDS = [
    'number11'
  ];

  /** @var int */
  private $priority;
  /** @var string */
  private $firstName;
  /** @var string */
  private $lastName;
  /** @var string */
  private $company;
  /** @var string */
  private $email;
  /** @var int */
  private $number1;
  /** @var int */
  private $number2;
  /** @var int */
  private $number3;
  /** @var \DateTime */
  private $enteredTs;
  /** @var \DateTime */
  private $callbackDate;
   // W2C Options
  private $f9updateCRM = true;

  /**
   * @param string $listName
   *
   * @return \Five9WebServices\DataTypes\ListImportResult
   * @throws Five9Exception
   */
  public function addToList($listName)
  {
    $ws = \Container::getFive9WebServices();
    $result = $ws->lists->addRecordToList($listName, $this);
    return $result;
  }

  /**
   * @param string $listName
   *
   * @return \Five9WebServices\DataTypes\ImportIdentifier
   * @throws Five9Exception
   */
  public function deleteFromList($listName)
  {
    $ws = \Container::getFive9WebServices();
    $result = $ws->lists->deleteRecordFromList($listName, $this);
    return $result;
  }

  /**
   * @return \Five9WebServices\DataTypes\ListImportResult
   * @throws Five9Exception
   */
  public function deleteFromContacts()
  {
    $ws = \Container::getFive9WebServices();
    $result = $ws->contacts->deleteFromContacts($this);
    return $result;
  }

  /**
   * @return DataTypes\CRMImportResult
   * @throws Five9Exception
   */
  public function addToContacts()
  {
    $ws = \Container::getFive9WebServices();
    $result = $ws->contacts->updateCrmRecord($this);

    return $result;
  }

  /**
   * Contact Create.
   *
   * @param int       $priority
   * @param string    $firstName
   * @param string    $lastName
   * @param string    $company
   * @param string    $email
   * @param int       $number1
   * @param int       $number2
   * @param int       $number3
   *
   * @return Contact
   */
  public static function create($priority, $firstName, $lastName,
    $company, $email, $number1, $number2, $number3
  ) {
    $contact = new Contact();
    $contact->setPriority($priority);
    $contact->setFirstName($firstName);
    $contact->setLastName($lastName);
    $contact->setCompany($company);
    $contact->setEmail($email);
    $contact->setNumber1($number1);
    $contact->setNumber2($number2);
    $contact->setNumber3($number3);
    $contact->setEnteredTs(new \DateTime('NOW'));

    return $contact;
  }


  /**
   * Gets an array for feeding into SoapRequest
   *
   * @return array
   */
  public function __toArray()
  {
    $result = [
      'priority'   => $this->getPriority(),
      'first_name' => $this->getFirstName(),
      'last_name'  => $this->getLastName(),
      'company'    => $this->getCompany(),
      'email'      => $this->getEmail(),
      'number1'    => $this->getNumber1(),
      'number2'    => $this->getNumber2(),
      'number3'    => $this->getNumber2(),
      'entered_ts' => $this->formatDateTime($this->getEnteredTs())
    ];

    return $result;
  }

  /**
   * @param \DateTime|null $date
   *
   * @return null|string
   */
  private function formatDateTime($date = null)
  {
    if (is_a($date, 'DateTime')) {
      return $date->format(self::DATE_TIME_FORMAT).' GMT0';
    }

    return null;
  }

  /**
   * @return string
   */
  public function toCsv()
  {
    return implode(',', $this->__toArray());
  }

  /**
   * @return array
   */
  public function toArray()
  {
    return $this->__toArray();
  }

  /**
   * Returns the mapping of fields for SoapRequest
   *
   * @param $add boolean
   *
   * @return array
   */
  public function getFieldMappingArray($add = true)
  {
    if ($add) {
      $fieldNames = $this->toArray();
    } else {
      $fieldNames = $this->getDeleteFieldMappedValues();
    }

    $fieldNumber = 1;
    $columns = [];
    foreach ($fieldNames as $field => $value) {
      $columns[] = [
        "columnNumber" => $fieldNumber++,
        "fieldName"    => $field,
        "key"          => (in_array($field, Contact::$ID_FIELDS))
      ];
    }

    return $columns;
  }

  /**
   * @return array
   */
  public function getDeleteFieldMappedValues()
  {
    return [
      'number1' => $this->getNumber1(),
      'uid'     => $this->getUid(),
    ];
  }

  /**
   * @return array
   */
  public function getFieldMappedValues()
  {
    return array_values($this->toArray());
  }

  /* GETTERS AND SETTERS ------------------------------------------------ */

  /**
   * @return int
   */
  public function getPriority()
  {
    return $this->priority;
  }

  /**
   * @param int $priority
   *
   * @return Contact
   */
  public function setPriority($priority)
  {
    $this->priority = $priority;

    return $this;
  }

  /**
   * @return string
   */
  public function getFirstName()
  {
    return $this->firstName;
  }

  /**
   * @param string $firstName
   *
   * @return Contact
   */
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;

    return $this;
  }

  /**
   * @return string
   */
  public function getLastName()
  {
    return $this->lastName;
  }

  /**
   * @param string $lastName
   *
   * @return Contact
   */
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;

    return $this;
  }

  /**
   * @return string
   */
  public function getCompany()
  {
    return $this->company;
  }

  /**
   * @param string $company
   *
   * @return Contact
   */
  public function setCompany($company)
  {
    $this->company = $company;

    return $this;
  }

  /**
   * @return string
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * @param string $email
   *
   * @return Contact
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * @return int
   */
  public function getNumber1()
  {
    return $this->number1;
  }

  /**
   * @param int $number1
   *
   * @return Contact
   */
  public function setNumber1($number1)
  {
    $this->number1 = $number1;

    return $this;
  }

  /**
   * @return int
   */
  public function getNumber2()
  {
    return $this->number2;
  }

  /**
   * @param int $number2
   *
   * @return Contact
   */
  public function setNumber2($number2)
  {
    $this->number2 = $number2;

    return $this;
  }

  /**
   * @return int
   */
  public function getNumber3()
  {
    return $this->number3;
  }

  /**
   * @param int $number3
   *
   * @return Contact
   */
  public function setNumber3($number3)
  {
    $this->number3 = $number3;

    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getEnteredTs()
  {
    return ($this->enteredTs) ?: new \DateTime('NOW');
  }

  /**
   * @param \DateTime $enteredTs
   *
   * @return Contact
   */
  public function setEnteredTs($enteredTs)
  {
    $this->enteredTs = $enteredTs;

    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getCallbackDate()
  {
    return $this->callbackDate;
  }

  /**
   * @param \DateTime $callbackDate
   *
   * @return Contact
   */
  public function setCallbackDate($callbackDate)
  {
    $this->callbackDate = $callbackDate;

    return $this;
  }
}