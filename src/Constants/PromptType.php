<?php
namespace orangeplus\Five9WebServices\Constants;

/**
 * Class PromptType
 *
 * @package Five9WebServices\Constants
 */
class PromptType extends Constant
{
  /**
   * @var string Audio file generated with Five9 text-to speech.
   */
  const TTS_GENERATED = 'TTSGenerated';
  /**
   * @var string Audio file recorded with third-party tool.
   */
  const PRE_RECORDED = 'PreRecorded';

}