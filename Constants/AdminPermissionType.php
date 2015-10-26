<?php
namespace Five9WebServices\Constants;

/**
 * Class AdminPermissionType
 *
 * @package Five9WebServices\Constants
 */
class AdminPermissionType extends Constant
{
  /**
   * @var string Has all the administrator permissions.
   */
  const FULL_PERMISSIONS = 'FullPermissions';
  /**
   * @var string Can manage users.
   */
  const MANAGE_USERS = 'ManageUsers';
  /**
   * @var string Can manage skills.
   */
  const MANAGE_SKILLS = 'ManageSkills';
  /**
   * @var string Can manage agent groups.
   */
  const MANAGE_AGENT_GROUPS = 'ManageAgentGroups';
  /**
   * @var string Can start and stop a campaign.
   */
  const MANAGE_CAMPAIGNS_START_STOP = 'ManageCampaignsStartStop';
  /**
   * @var string Can reset campaign dispositions.
   */
  const MANAGE_CAMPAIGNS_RESET_DISPOSITIONS = 'ManageCampaignsResetDispositions';
  /**
   * @var string Can reset campaign list position.
   */
  const MANAGE_CAMPAIGNS_RESET_LIST_POSITIONS = 'ManageCampaignsResetListPosition';
  /**
   * @var string Can reset campaigns.
   */
  const MANAGE_CAMPAIGNS_RESET = 'ManageCampaignsReset';
  /**
   * @var string Can manage campaign properties.
   */
  const MANAGE_CAMPAIGNS_PROPERTIES = 'ManageCampaignsProperties';
  /**
   * @var string Can manage lists.
   */
  const MANAGE_LISTS = 'ManageLists';
  /**
   * @var string Can manage CRMs.
   */
  const MANAGE_CRM = 'ManageCRM';
  /**
   * @var string Can manage DNC lists.
   */
  const MANAGE_DNC = 'ManageDNC';
  /**
   * @var string Can edit IVRs.
   */
  const EDIT_IVR = 'EditIvr';
  /**
   * @var string Can edit user profiles.
   */
  const EDIT_PROFILES = 'EditProfiles';
  /**
   * @var string Can edit connectors.
   */
  const EDIT_CONNECTORS = 'EditConnectors';
  /**
   * @var string Can edit dispositions.
   */
  const EDIT_DISPOSITIONS = 'EditDispositions';
  /**
   * @var string Can edit prompts.
   */
  const EDIT_PROMPTS = 'EditPrompts';
  /**
   * @var string Can edit reason codes.
   */
  const EDIT_REASON_CODES = 'EditReasonCodes';
  /**
   * @var string Can edit work flow rules.
   */
  const EDIT_WORKFLOW_RULES = 'EditWorkflowRules';
  /**
   * @var string Can configure ANIs.
   */
  const ACCESS_CONFIG_ANI = 'AccessConfigANI';
  /**
   * @var string Can edit call-attached variables.
   */
  const EDIT_CALL_ATTACHED_DATA = 'EditCallAttachedData';
  /**
   * @var string Can edit trusted IP addresses.
   */
  const EDIT_TRUSTED_IP_ADDRESSES = 'EditTrustedIPAddresses';
  /**
   * @var string Can use the NICE feature.
   */
  const NICE_ENABLED = 'NICEEnabled';
  /**
   * @var string Can enable the Billing Portal.
   */
  const ACCESS_BILLING_APPLICATION = 'AccessBillingApplication';
}