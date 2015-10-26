<?php
namespace Five9WebServices\Constants;

/**
 * Class ReportingPermissionType
 *
 * @package Five9WebServices\Constants
 */
class ReportingPermissionType extends Constant
{
  /**
   * @var string Can schedule reports for an FTP server.
   */
  const CAN_SCHEDULE_REPORTS_VIA_FTP = 'CanScheduleReportsViaFtp';
  /**
   * @var string
   * Can access the Recording column, which links to recordings in the Reporting
   * portal. Enabled by default.
   */
  const CAN_ACCESS_RECORDINGS_COLUMN = 'CanAccessRecordingsColumn';
  /**
   * @var string
   * Applies only to NICE-enabled domains. Flags user to be tracked by NICE
   * integration. Turned off by default.
   */
  const NICE_ENABLED = 'NICEEnabled';
  /**
   * @var string Can access the Standard Reports tab.
   */
  const CAN_VIEW_STANDARD_REPORTS = 'CanViewStandardReports';
  /**
   * @var string Can access the Custom Reports tab.
   */
  const CAN_VIEW_CUSTOM_REPORTS = 'CanViewCustomReports';
  /**
   * @var string Can access the Scheduled Reports tab.
   */
  const CAN_VIEW_SCHEDULED_REPORTS = 'CanViewScheduledReports';
  /**
   * @var string Can access the Recent Reports tab.
   */
  const CAN_VIEW_RECENT_REPORTS = 'CanViewRecentReports';
  /**
   * @var string Can access the Release 7 Reports tab.
   */
  const CAN_VIEW_RELEASE7_REPORTS = 'CanViewRelease7Reports';
  /**
   * @var string Can access the Canned Reports tab.
   */
  const CAN_VIEW_CANNED_REPORTS = 'CanViewCannedReports';

}