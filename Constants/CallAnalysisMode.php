<?php
namespace orangeplus\Five9WebServices\Constants;

/**
 * Class CallAnalysisMode
 *
 * @package Five9WebServices\Constants
 */
class CallAnalysisMode extends Constant
{
  /**
   * @var string No detection is attempted.
   */
  const  NO_ANALYSIS = 'NO_ANALYSIS';
  /**
   * @var string Fax detection is attempted.
   */
  const  FAX_ONLY = 'FAX_ONLY';
  /**
   * @var string Fax and answering machine detection are attempted.
   */
  const  FAX_AND_ANSWERING_MACHINE = 'FAX_AND_ANSWERING_MACHINE';

}