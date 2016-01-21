<?php
namespace orangeplus\Five9WebServices\Methods;

use \orangeplus\Five9WebServices\DataTypes\Disposition;
use \orangeplus\Five9WebServices\Five9Exception;

/**
 * Class DispositionConfiguration
 *
 * @package Five9WebServices\Methods
 *
 * @throws Five9Exception
 */
class DispositionConfiguration extends Methods
{
  /**
   * Use this method to create a disposition.
   *
   * @param Disposition $disposition
   *
   * @return mixed
   * @throws Five9Exception
   */
  public function createDisposition(Disposition $disposition)
  {
    $data = array(
      'disposition' => $disposition
    );

    try {
      $result = $this->client->createDisposition($data);

      return $result;
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }
  }

  /**
   * Use this method to obtain the attributes of a disposition
   *
   * @param string $dispositionName
   *
   * @return Disposition
   * @throws Five9Exception
   */
  public function getDisposition($dispositionName)
  {
    $data = array(
      'dispositionName' => $dispositionName
    );

    try {
      $result = $this->client->getDisposition($data);

      return Disposition::cast($result);
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }
  }

  /**
   * Use this method to obtain the attributes of the dispositions that match a
   * name pattern
   *
   * @param string $dispositionNamePattern Default matches all
   *
   * @return Disposition[]
   * @throws Five9Exception
   */
  public function getDispositions($dispositionNamePattern = '.*?')
  {
    $data = array(
      'dispositionNamePattern' => $dispositionNamePattern
    );

    try {
      $result = $this->client->getDispositions($data);
      $results = array();
      foreach ($result->return as $disposition) {
        $results[] = Disposition::cast($disposition);
      }

      return $results;
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }

  }

  /**
   * Use this method to modify the attributes of a disposition.
   *
   * @param Disposition $disposition
   *
   * @return mixed
   * @throws Five9Exception
   */
  public function modifyDisposition(Disposition $disposition)
  {
    $data = array('disposition' => $disposition);
    try {
      $result = $this->client->modifyDisposition($data);

      return $result;
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }

  }

  /**
   * Use this method to remove a disposition from the configuration.
   *
   * @param string $dispositionName
   *
   * @return mixed
   * @throws Five9Exception
   */
  public function removeDisposition($dispositionName)
  {
    $data = array('dispositionName' => $dispositionName);
    try {
      $result = $this->client->removeDisposition($data);

      return $result;
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }
  }

  /**
   * Use this method to rename a disposition
   *
   * @param string $dispositionName
   * @param string $dispositionNewName
   *
   * @return mixed
   * @throws Five9Exception
   */
  public function renameDisposition($dispositionName, $dispositionNewName)
  {
    $data = array(
      'dispositionName'    => $dispositionName,
      'dispositionNewName' => $dispositionNewName
    );

    try {
      $result = $this->client->renameDisposition($data);

      return $result;
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }
  }
}