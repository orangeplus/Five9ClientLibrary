<?php
namespace orangeplus\Five9WebServices\Methods;

use Five9WebServices\Five9Exception;

/**
 * Class DNC
 * Manage Do Not Call list
 *
 * @package Five9WebServices\Methods
 */
class DNC extends Methods
{
  /**
   * Use this method to add phone numbers to the domain-wide do-not-call (DNC)
   * list. Because these lists are typically very large, you can import them
   * only from 11:00 PM � 6:00 AM Pacific Time. If you use this method at other
   * times, you receive an exception.
   *
   * @param string[] $numbersNotToCall
   *
   * @return int
   */
  function addNumbersToDnc($numbersNotToCall)
  {
    $data = array(
      'numbers' => $numbersNotToCall
    );
    $result = $this->client->addNumbersToDnc($data);

    return $result;
  }

  /**
   * @param string[] $numbers
   *
   * @return array
   */
  function checkDncForNumbers($numbers)
  {
    $data = array(
      'numbers' => $numbers
    );
    $result = $this->client->checkDncForNumbers($data);

    return (array)$result;
  }

  /**
   * @param string[] $numbers
   *
   * @return array
   */
  function removeNumbersFromDnc($numbers)
  {
    $data = array(
      'numbers' => $numbers
    );
    $result = $this->client->removeNumbersFromDnc($data);

    return (array)$result;
  }

}