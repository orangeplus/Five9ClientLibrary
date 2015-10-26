<?php
namespace Five9WebServices\Constants;

/**
 * Class WebConnectorTriggerType
 *
 * @package Five9WebServices\Constants
 */
class WebConnectorTriggerType extends Constant
{
  /**
   * @var string Triggered when the call is accepted.
   */
  const ON_CALL_ACCEPTED = 'OnCallAccepted';
  /**
   * @var string Triggered when the call is disconnected.
   */
  const ON_CALL_DISCONNECTED = 'OnCallDisconnected';
  /**
   * @var string Connector is started manually.
   */
  const MANUALLY_STARTED = 'ManuallyStarted';
  /**
   * @var string Connector is started manually during call preview.
   */
  const MANUALLY_STARTED_ALLOW_DURING_PREVIEWS = 'ManuallyStartedAllowDuringPreviews';
  /**
   * @var string Triggered when the call is previewed.
   */
  const ON_PREVIEW = 'OnPreview';
  /**
   * @var string Triggered when a contact is selected.
   */
  const ON_CONTACT_SELECTION = 'OnContactSelection';
  /**
   * @var string Triggered when a warm transfer is initiated.
   */
  const ON_WARM_TRANSFER_INITIATION = 'OnWarmTransferInitiation';
  /**
   * @var string Triggered when a disposition is selected.
   */
  const ON_CALL_DISPOSITIONED = 'OnCallDispositioned';

}