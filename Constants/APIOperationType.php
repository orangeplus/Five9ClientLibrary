<?php
namespace Five9WebServices\Constants;

/**
 * Class APIOperationType
 *
 * @package Five9WebServices\Constants
 */
class APIOperationType extends Constant
{
  /**
   * @var string Examples: getListsInfo
   */
  const QUERY = 'Query';
  /**
   * @var string Examples: addSkillToCampaign
   */
  const MODIFY = 'Modify';
  /**
   * @var string Examples: createCampaign
   */
  const UPLOAD = 'Upload';
  /**
   * @var string Examples: addRecordToList
   */
  const SINGLE_UPLOAD = 'SingleUpload';
  /**
   * @var string Examples: runReport
   */
  const REPORT_REQUEST = 'ReportRequest';
  /**
   * @var string Examples: getReportResult
   */
  const RETRIEVE_REPORT = 'RetrieveReport';
  /**
   * @var string Examples: asyncAddRecordsToList
   */
  const ASYNCHRONOUS_UPLOAD = 'AsynchronousUpload';
  /**
   * @var string Examples: getStatistics
   */
  const QUERY_STATISTICS = 'QueryStatistics';
  /**
   * @var string Examples: getStatisticsUpdate
   */
  const QUERY_CHANGED_STATISTICS = 'QueryChangedStatistics';
  /**
   * @var string Examples: Not used.
   */
  const WEB2_CAMPAIGN_UPLOAD = 'Web2CampaignUpload';
  /**
   * @var string Examples: No specific method.
   */
  const VIVR_CREATE_SESSION = 'VIVRCreateSession';
}