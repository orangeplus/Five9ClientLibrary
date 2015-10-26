<?php
namespace Five9WebServices\Constants;

/**
 * Class AgentPermissionType
 *
 * @package Five9WebServices\Constants
 */
class AgentPermissionType extends Constant
{
  /**
   * @var string
   * Can transfer calls to another agent or to a phone number to a
   * third party outside the Five9 system.
   **/
  const MAKE_TRANSFER = 'MakeTransfer';
  /**
   * @var string Can receive transfers from another agent.
   */
  const RECEIVE_TRANSFER = 'ReceiveTransfer';
  /**
   * @var string Can add a participant to a conference call.
   */
  const CREATE_CONFERENCE = 'CreateConference';
  /**
   * @var string Can dial calls manually and make callbacks.
   */
  const MAKE_CALL = 'MakeCall';
  /**
   * @var string
   * Can call other agents, can transfer, or can join a conference
   * call to an inbound campaign (the agent can select a campaign in the transfer
   * and conference dialogs.
   */
  const MAKE_INTERNAL_CALL = 'MakeInternalCall';
  /**
   * @var string Can process skill voicemail messages.
   */
  const PROCESS_VOICE_MAIL = 'ProcessVoiceMail';
  /**
   * @var string Can delete voicemail messages.
   */
  const DELETE_VOICE_MAIL = 'DeleteVoiceMail';
  /**
   * @var string Can transfer voicemail messages to another user or skill group.
   */
  const TRANSFER_VOICE_MAIL = 'TransferVoiceMail';
  /**
   * @var string Can record calls or a portion of a call.
   */
  const MAKE_RECORDINGS = 'MakeRecordings';
  /**
   * @var string Can send messages to agents, administrators, or supervisors.
   */
  const SEND_MESSAGES = 'SendMessages';
  /**
   * @var string
   * Can start a chat session with agents, administrators, or supervisors.
   */
  const CREATE_CHAT_SESSIONS = 'CreateChatSessions';
  /**
   * @var string Can initiate and receive a test call in the agent desktop.
   */
  const TRAINING_MODE = 'TrainingMode';
  /**
   * @var string
   * Cannot delete contact records. Five9 recommends that you assign this
   * permission to all agents.
   */
  const CANNOT_REMOVE_CRM = 'CannotRemoveCRM';
  /**
   * @var string Cannot edit CRM session notes.
   */
  const CANNOT_EDIT_SESSION = 'CannotEditSession';

  /**
   * @var string Can enable call forwarding.
   */
  const CALL_FORWARDING = 'CallForwarding';
  /**
   * @var string
   * Can add numbers to a do-not-call (DNC) list. Without this permission, the
   * Add to DNC option in the agent desktop is unavailable, but agents can
   * still use custom dispositions that add numbers to DNC.
   */
  const ADDING_TO_DNC = 'AddingToDNC';
  /**
   * @var string
   * Can manually dial the numbers listed in the DNC List. Without this permission,
   * the agent sees an error message when dialing a number on the DNC list.
   */
  const DIAL_MANUALLY_DNC = 'DialManuallyDNC';
  /**
   * @var string
   * Can create callback reminders. Without this permission, the Add
   * Callback button in the agent desktop is disabled.
   */
  const CREATE_CALLBACKS = 'CreateCallbacks';
  /**
   * @var string
   * Can play prerecorded messages while on call or leave standard recorded
   * messages on answering machines (Play Audio File button). Without this
   * permission, the audio files in the agent desktop are hidden.
   */
  const PLAY_AUDIO_FILES = 'PlayAudioFiles';
  /**
   * @var string
   * Can skip records In Preview Dialing Mode. Disabled by default.
   */
  const SKIP_CRM_IN_PREVIEW_DIAL_MODE = 'SkipCrmInPreviewDialMode';
  /**
   * @var string
   * Can select the skill groups or ACD queues in which to participate during
   * the active session.
   */
  const MANAGE_AVAILABILITY_BY_SKILL = 'ManageAvailabilityBySkill';
  /**
   * @var string
   * Can use the browser to open any URL from the agent desktop.
   */
  const BROWSE_WEB_IN_EMBEDDED_BROWSER = 'BrowseWebInEmbeddedBrowser';
  /**
   * @var string Can control when and where the preview window is displayed.
   */
  const CHANGE_PREVIEW_PREFERENCES = 'ChangePreviewPreferences';
  /**
   * @var string
   * Can end a call and assign a disposition to it after spending time in the
   * WrapUp state. Without this permission, the agent can end a call only by
   * setting a disposition.
   */
  const CAN_WRAP_CALL = 'CanWrapCall';
  /**
   * @var string Can place calls on hold.
   */
  const CAN_PLACE_CALL_ON_HOLD = 'CanPlaceCallOnHold';
  /**
   * @var string Can park a call.
   */
  const CAN_PARK_CALL = 'CanParkCall';
  /**
   * @var string
   * When auto-answer is disabled, the agent can decline incoming calls
   * (typically inbound calls). To use this permission, be sure to enable
   * CanConfigureAutoAnswer.
   */
  const CAN_REJECT_CALLS = 'CanRejectCalls';
  /**
   * @var string
   * Can choose whether to auto-answer calls or be prompted before accepting a
   * call. Enabled by default.
   */
  const CAN_CONFIGURE_AUTO_ANSWER = 'CanConfigureAutoAnswer';
  /**
   * @var string
   * In NICE-enabled domains, flags agent to be tracked by NICE integration.
   * Disabled by default.
   */
  const NICE_ENABLED = 'NICEEnabled';
  /**
   * @var string
   * In NICE-enabled domains, flags agent for screen recording.
   */
  const SCREEN_RECORDING = 'ScreenRecording';
  /**
   * @var string
   * Can use the Salesforce email integration feature.
   */
  const PROCESS_EMAIL = 'ProcessEMail';
  /**
   * @var string
   * Enables agents to view and select the Recycle system disposition.
   */
  const RECYCLE_DISPOSITION_ALLOWED = 'RecycleDispositionAllowed';
  /**
   * @var string
   * Can transfer calls to other agents.
   */
  const MAKE_TRANSFER_TO_AGENTS = 'MakeTransferToAgents';
  /**
   * @var string
   * Can transfer calls to skill groups.
   */
  const MAKE_TRANSFER_TO_SKILLS = 'MakeTransferToSkills';
  /**
   * @var string
   * Can transfer calls to inbound campaigns.
   */
  const MAKE_TRANSFER_TO_INBOUND_CAMPAIGN = 'MakeTransferToInboundCampaigns';
  /**
   * @var string
   * Can transfer calls to external phone numbers.
   */
  const MAKE_TRANSFER_TO_EXTERNAL_CALLS = 'MakeTransferToExternalCalls';
  /**
   * @var string
   * Can create a conference with other agents.
   */
  const CREATE_CONFERENCE_WITH_AGENTS = 'CreateConferenceWithAgents';
  /**
   * @var string
   * Can create a conference by using skill groups.
   */
  const CREATE_CONFERENCE_WITH_SKILLS = 'CreateConferenceWithSkills';
  /**
   * @var string
   * Can create a conference with inbound campaigns.
   */
  const CREATE_CONFERENCE_WITH_INBOUND_CAMPAINGS = 'CreateConferenceWithInboundCampaigns';
  /**
   * @var string
   * Can create a conference with external call participants.
   */
  const CREATE_CONFERENCE_WITH_EXTERNAL_CALLS = 'CreateConferenceWithExternalCalls';
  /**
   * @var string
   * Can call other agents.
   */
  const MAKE_CALL_TO_AGENTS = 'MakeCallToAgents';
  /**
   * @var string
   * Can call skill groups.
   */
  const MAKE_CALL_TOS_KILLS = 'MakeCallToSkills';
  /**
   * @var string
   * Can make external calls.
   */
  const MAKE_CALL_TO_EXTERNAL_CALL = 'MakeCallToExternalCall';
  /**
   * @var string
   * Can use the Java client of the Agent Desktop Plus version of the VCC.
   */
  const CAN_RUN_JAVA_CLIENT = 'CanRunJavaClient';
  /**
   * @var string
   * Can use the Web client of the Agent Desktop Plus version of the VCC.
   */
  const CAN_RUN_WEB_CLIENT = 'CanRunWebClient';

}