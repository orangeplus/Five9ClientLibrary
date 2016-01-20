<?php
namespace orangeplus\Five9WebServices\DataTypes;

/**
 * Class AgentGroup
 *
 * @package Five9WebServices\DataTypes
 */
class AgentGroup extends FullArray
{
  use \Five9WebServices\Castable;

  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string[] */
  public $agents;
  /** @var string */
  public $description;

  /**
   * @param string   $name
   * @param string[] $agents
   * @param string   $description
   *
   * @return AgentGroup
   */
  public static function create($name, $agents, $description = null)
  {
    $group = new AgentGroup();
    $group->setName($name);
    $group->setAgents($agents);
    $group->setDescription($description);

    return $group;
  }

  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param string $id
   *
   * @return AgentGroup
   */
  public function setId($id)
  {
    $this->id = $id;

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
   * @return AgentGroup
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * @return \string[]
   */
  public function getAgents()
  {
    return $this->agents;
  }

  /**
   * @param \string[] $agents
   *
   * @return AgentGroup
   */
  public function setAgents($agents)
  {
    $this->agents = array_unique($agents);

    return $this;
  }

  /**
   * @param string $agent
   *
   * @return $this
   */
  public function addAgent($agent)
  {
    $this->agents[] = $agent;
    $this->agents = array_unique($this->agents);

    return $this;
  }

  /**
   * @param string $agent
   *
   * @return $this
   */
  public function removeAgent($agent)
  {
    for ($i = 0; $i < count($this->agents); $i++) {
      if ($agent == $this->agents[$i]) {
        unset($this->agents[$i]);
      }
    }
    // reset index
    $this->agents = array_values($this->agents);

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
   * @return AgentGroup
   */
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }
}