<?php
namespace orangeplus\Five9WebServices\Constants;

/**
 * Class SupervisorPermissionType
 *
 * @package Five9WebServices\Constants
 */
class SupervisorPermissionType extends Constant
{
  /**
   * @var string Can view the Users tab in the Supervisor desktop.
   */
  const USERS = 'Users';
  /**
   * @var string Can monitor the status of agents (logged out, on break, on a call) and view agent statistics and ACD queues.
   */
  const AGENTS = 'Agents';
  /**
   * @var string Can listen to agents' calls (silent monitoring)
   */
  const CALL_MONITORING = 'CallMonitoring';
  /**
   * @var string Can view station IDs assigned to their domain.
   */
  const STATIONS = 'Stations';
  /**
   * @var string Can view active chat sessions.
   */
  const CHAT_SESSIONS = 'ChatSessions';
  /**
   * @var string Can view the Campaigns tab, including campaign status information and statistics, and other information and abilities.
   */
  const CAMPAIGNS = 'Campaigns';
  /**
   * @var string Can be enabled for any of the single campaign management permissions at the bottom of this table: CampaignManagementStart, CampaignManagementStop, CampaignManagementReset, CampaignManagementResetDispos itions, CampaignManagement ResetListPositions, and CampaignManagementResetDialer DCP.
   */
  const CAMPAIGN_MANAGEMENT = 'CampaignManagement';
  /**
   * @var string If false, only the skill data assigned to the user is visible. It disables the Filter Statistics by Skill option in the Supervisor View menu.
   */
  const ALL_SKILLS = 'AllSkills';
  /**
   * @var string Whether the user can view the billing information: true or false.
   */
  const BILLING_INFO = 'BillingInfo';
  /**
   * @var string Can speak with the customer. Use this value when the supervisor needs to help but not take over the call from the agent.
   */
  const BARGE_IN_MONITOR = 'BargeInMonitor';
  /**
   * @var string Can speak to the agent without being heard by the customer. Use this value when coaching agents or assisting with difficult calls.
   */
  const WHISPER_MONITOR = 'WhisperMonitor';
  /**
   * @var string Can access all agent groups. When the permission is disabled, the supervisor can access only agent groups of which the supervisor is a member.
   */
  const VIEW_DATA_FOR_ALL_AGENT_GROUPS = 'ViewDataForAllAgentGroups';
  /**
   * @var string Can access voicemail messages and recordings associated with each agent that the supervisor can access.
   */
  const REVIEW_VOICE_RECORDINGS = 'ReviewVoiceRecordings';
  /**
   * @var string Can add and remove skills and change skill levels for agents that the supervisor can view.
   */
  const EDIT_AGENT_SKILLS = 'EditAgentSkills';
  /**
   * @var string For NICE-enabled domains, flags user to be tracked by NICE integration. Disabled by default.
   */
  const NICE_ENABLED = 'NICEEnabled';
  /**
   * @var string Can access the Dashboard menu in the supervisor desktop.
   */
  const CAN_ACCESS_DASHBOARD_MENU = 'CanAccessDashboardMenu';
  /**
   * @var string Can start a campaign.
   */
  const CAMPAIGN_MANAGEMENT_START = 'CampaignManagementStart';
  /**
   * @var string Can stop a campaign.
   */
  const CAMPAIGN_MANAGEMENT_STOP = 'CampaignManagementStop';
  /**
   * @var string Can reset a campaign.
   */
  const CAMPAIGN_MANAGEMENT_RESET = 'CampaignManagementReset';
  /**
   * @var string Can reset the dispositions of a campaign.
   */
  const CAMPAIGN_MANAGEMENT_RESET_DISPOSITIONS = 'CampaignManagementResetDispositions';
  /**
   * @var string Can reset the dialing list position for outbound and autodial campaigns.
   */
  const CAMPAIGN_MANAGEMENT_RESET_LIST_POSITIONS = 'CampaignManagementResetListPositions';
  /**
   * @var string Can reset the dialer's dropped call percentage.
   */
  const CAMPAIGN_MANAGEMENT_RESET_DIALER_DCP = 'CampaignManagementResetDialerDCP';
  /**
   * @var string Can view and log into the Text Details tab of the Supervisor desktop to access social media, email, and chat.
   */
  const CAN_VIEW_TEXT_DETAILS_TAB = 'CanViewTextDetailsTab';
  /**
   * @var string Can use the View > Show Fields menu to set the layout of the application.
   */
  const CAN_ACCESS_SHOW_FIELDS = 'CanAccessShowFields';

}