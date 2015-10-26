<?php
namespace Five9WebServices\Constants;

class CampaignDialingActionType extends Constant
{
  /**
   * @var string Drop the call.
   */
  const DROP_CALL = 'DROP_CALL';
  /**
   * @var string Play a prompt.
   */
  const PLAY_PROMPT = 'PLAY_PROMPT';
  /**
   * @var string Start an IVR script.
   */
  const START_IVR_SCRIPT = 'START_IVR_SCRIPT';
}