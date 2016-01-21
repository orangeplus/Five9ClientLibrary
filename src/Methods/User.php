<?php
namespace orangeplus\Five9WebServices\Methods;

use \orangeplus\Five9WebServices\DataTypes\AgentGroup;
use \orangeplus\Five9WebServices\Five9Exception;

class User extends Methods
{
  /**
   * @param AgentGroup $agentGroup
   *
   * @return AgentGroup
   * @throws Five9Exception
   */
  public function createAgentGroup(AgentGroup $agentGroup)
  {
    $data = array('group' => $agentGroup);

    try {
      $result = $this->client->createAgentGroup($data);

      return AgentGroup::cast($result);
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }
  }

  /**
   * @param string $groupName
   *
   * @return mixed
   * @throws Five9Exception
   */
  public function deleteAgentGroup($groupName)
  {
    $data = array('groupName' => $groupName);
    try {
      $result = $this->client->deleteAgentGroup($data);

      return $result;
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }
  }

  /**
   * @param string $groupName
   *
   * @return mixed
   * @throws Five9Exception
   */
  public function getAgentGroup($groupName)
  {
    $data = array('groupName' => $groupName);
    try {
      $result = $this->client->getAgentGroup($data);

      return AgentGroup::cast($result);
    } catch (\Exception $e) {
      throw new Five9Exception($e->getMessage());
    }
  }

  // TODO:
  /*
  public function getAgentGroups()
  {
  }

  public function modifyAgentGroup()
  {
  }

  public function createUser()
  {
  }

  public function deleteUser()
  {
  }

  public function getUserGeneralInfo()
  {
  }

  public function getUserInfo()
  {
  }

  public function getUserVoicemailGreeting()
  {
  }
*/
  /**
   * @param string $query Regex Expression
   *
   * @return \stdClass
   */
  public function getUsersGeneralInfo($query = null)
  {
    $result = $this->client->getUsersGeneralInfo($query);
    $users = [];
    foreach ($result->return as $user) {
      $users[] =\orangeplus\Five9WebServices\DataTypes\UserGeneralInfo::cast($user);
    }

    return $users;
  }
  /*
    public function getUsersInfo()
    {
    }

    public function modifyUser()
    {
    }

    public function modifyUserCannedReports()
    {
    }

    public function setUserVoicemailGreeting()
    {
    }

    public function userSkillAdd()
    {
    }

    public function userSkillModify()
    {
    }

    public function userSkillRemove()
    {
    }

    public function createUserProfile()
    {
    }

    public function deleteUserProfile()
    {
    }

    public function getUserProfile()
    {
    }

    public function getUserProfiles()
    {
    }

    public function modifyUserProfile()
    {
    }

    public function modifyUserProfileSkills()
    {
    }

    public function modifyUserProfileUserList()
    {
    }
    */
}