<?php
namespace orangeplus\Five9WebServices\DataTypes;

/**
 * Class DispositionCount
 *
 * @package Five9WebServices\DataTypes
 */
class DispositionCount
{
  /** @var  string */
  private $count;
  /** @var  string[] */
  private $dispositions;

  /**
   * @return string
   */
  public function getCount()
  {
    return $this->count;
  }

  /**
   * @param string $count
   *
   * @return DispositionCount
   */
  public function setCount($count)
  {
    $this->count = $count;

    return $this;
  }

  /**
   * @return \string[]
   */
  public function getDispositions()
  {
    return $this->dispositions;
  }

  /**
   * @param \string[] $dispositions
   *
   * @return DispositionCount
   */
  public function setDispositions($dispositions)
  {
    $this->dispositions = $dispositions;

    return $this;
  }


}