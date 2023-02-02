<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MediaStream implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new mediaStream and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaStream
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaStream {
        return new MediaStream();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the audioCodec property value. Codec name used to encode audio for transmission on the network. Possible values are: unknown, invalid, cn, pcma, pcmu, amrWide, g722, g7221, g7221c, g729, multiChannelAudio, muchv2, opus, satin, satinFullband, rtAudio8, rtAudio16, silk, silkNarrow, silkWide, siren, xmsRTA, unknownFutureValue.
     * @return AudioCodec|null
    */
    public function getAudioCodec(): ?AudioCodec {
        return $this->getBackingStore()->get('audioCodec');
    }

    /**
     * Gets the averageAudioDegradation property value. Average Network Mean Opinion Score degradation for stream. Represents how much the network loss and jitter has impacted the quality of received audio.
     * @return float|null
    */
    public function getAverageAudioDegradation(): ?float {
        return $this->getBackingStore()->get('averageAudioDegradation');
    }

    /**
     * Gets the averageAudioNetworkJitter property value. Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @return DateInterval|null
    */
    public function getAverageAudioNetworkJitter(): ?DateInterval {
        return $this->getBackingStore()->get('averageAudioNetworkJitter');
    }

    /**
     * Gets the averageBandwidthEstimate property value. Average estimated bandwidth available between two endpoints in bits per second.
     * @return int|null
    */
    public function getAverageBandwidthEstimate(): ?int {
        return $this->getBackingStore()->get('averageBandwidthEstimate');
    }

    /**
     * Gets the averageJitter property value. Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @return DateInterval|null
    */
    public function getAverageJitter(): ?DateInterval {
        return $this->getBackingStore()->get('averageJitter');
    }

    /**
     * Gets the averagePacketLossRate property value. Average packet loss rate for stream.
     * @return float|null
    */
    public function getAveragePacketLossRate(): ?float {
        return $this->getBackingStore()->get('averagePacketLossRate');
    }

    /**
     * Gets the averageRatioOfConcealedSamples property value. Ratio of the number of audio frames with samples generated by packet loss concealment to the total number of audio frames.
     * @return float|null
    */
    public function getAverageRatioOfConcealedSamples(): ?float {
        return $this->getBackingStore()->get('averageRatioOfConcealedSamples');
    }

    /**
     * Gets the averageReceivedFrameRate property value. Average frames per second received for all video streams computed over the duration of the session.
     * @return float|null
    */
    public function getAverageReceivedFrameRate(): ?float {
        return $this->getBackingStore()->get('averageReceivedFrameRate');
    }

    /**
     * Gets the averageRoundTripTime property value. Average network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @return DateInterval|null
    */
    public function getAverageRoundTripTime(): ?DateInterval {
        return $this->getBackingStore()->get('averageRoundTripTime');
    }

    /**
     * Gets the averageVideoFrameLossPercentage property value. Average percentage of video frames lost as displayed to the user.
     * @return float|null
    */
    public function getAverageVideoFrameLossPercentage(): ?float {
        return $this->getBackingStore()->get('averageVideoFrameLossPercentage');
    }

    /**
     * Gets the averageVideoFrameRate property value. Average frames per second received for a video stream, computed over the duration of the session.
     * @return float|null
    */
    public function getAverageVideoFrameRate(): ?float {
        return $this->getBackingStore()->get('averageVideoFrameRate');
    }

    /**
     * Gets the averageVideoPacketLossRate property value. Average fraction of packets lost, as specified in [RFC 3550][], computed over the duration of the session.
     * @return float|null
    */
    public function getAverageVideoPacketLossRate(): ?float {
        return $this->getBackingStore()->get('averageVideoPacketLossRate');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the endDateTime property value. UTC time when the stream ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audioCodec' => fn(ParseNode $n) => $o->setAudioCodec($n->getEnumValue(AudioCodec::class)),
            'averageAudioDegradation' => fn(ParseNode $n) => $o->setAverageAudioDegradation($n->getFloatValue()),
            'averageAudioNetworkJitter' => fn(ParseNode $n) => $o->setAverageAudioNetworkJitter($n->getDateIntervalValue()),
            'averageBandwidthEstimate' => fn(ParseNode $n) => $o->setAverageBandwidthEstimate($n->getIntegerValue()),
            'averageJitter' => fn(ParseNode $n) => $o->setAverageJitter($n->getDateIntervalValue()),
            'averagePacketLossRate' => fn(ParseNode $n) => $o->setAveragePacketLossRate($n->getFloatValue()),
            'averageRatioOfConcealedSamples' => fn(ParseNode $n) => $o->setAverageRatioOfConcealedSamples($n->getFloatValue()),
            'averageReceivedFrameRate' => fn(ParseNode $n) => $o->setAverageReceivedFrameRate($n->getFloatValue()),
            'averageRoundTripTime' => fn(ParseNode $n) => $o->setAverageRoundTripTime($n->getDateIntervalValue()),
            'averageVideoFrameLossPercentage' => fn(ParseNode $n) => $o->setAverageVideoFrameLossPercentage($n->getFloatValue()),
            'averageVideoFrameRate' => fn(ParseNode $n) => $o->setAverageVideoFrameRate($n->getFloatValue()),
            'averageVideoPacketLossRate' => fn(ParseNode $n) => $o->setAverageVideoPacketLossRate($n->getFloatValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'lowFrameRateRatio' => fn(ParseNode $n) => $o->setLowFrameRateRatio($n->getFloatValue()),
            'lowVideoProcessingCapabilityRatio' => fn(ParseNode $n) => $o->setLowVideoProcessingCapabilityRatio($n->getFloatValue()),
            'maxAudioNetworkJitter' => fn(ParseNode $n) => $o->setMaxAudioNetworkJitter($n->getDateIntervalValue()),
            'maxJitter' => fn(ParseNode $n) => $o->setMaxJitter($n->getDateIntervalValue()),
            'maxPacketLossRate' => fn(ParseNode $n) => $o->setMaxPacketLossRate($n->getFloatValue()),
            'maxRatioOfConcealedSamples' => fn(ParseNode $n) => $o->setMaxRatioOfConcealedSamples($n->getFloatValue()),
            'maxRoundTripTime' => fn(ParseNode $n) => $o->setMaxRoundTripTime($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'packetUtilization' => fn(ParseNode $n) => $o->setPacketUtilization($n->getIntegerValue()),
            'postForwardErrorCorrectionPacketLossRate' => fn(ParseNode $n) => $o->setPostForwardErrorCorrectionPacketLossRate($n->getFloatValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'streamDirection' => fn(ParseNode $n) => $o->setStreamDirection($n->getEnumValue(MediaStreamDirection::class)),
            'streamId' => fn(ParseNode $n) => $o->setStreamId($n->getStringValue()),
            'videoCodec' => fn(ParseNode $n) => $o->setVideoCodec($n->getEnumValue(VideoCodec::class)),
            'wasMediaBypassed' => fn(ParseNode $n) => $o->setWasMediaBypassed($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the lowFrameRateRatio property value. Fraction of the call where frame rate is less than 7.5 frames per second.
     * @return float|null
    */
    public function getLowFrameRateRatio(): ?float {
        return $this->getBackingStore()->get('lowFrameRateRatio');
    }

    /**
     * Gets the lowVideoProcessingCapabilityRatio property value. Fraction of the call that the client is running less than 70% expected video processing capability.
     * @return float|null
    */
    public function getLowVideoProcessingCapabilityRatio(): ?float {
        return $this->getBackingStore()->get('lowVideoProcessingCapabilityRatio');
    }

    /**
     * Gets the maxAudioNetworkJitter property value. Maximum of audio network jitter computed over each of the 20 second windows during the session, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @return DateInterval|null
    */
    public function getMaxAudioNetworkJitter(): ?DateInterval {
        return $this->getBackingStore()->get('maxAudioNetworkJitter');
    }

    /**
     * Gets the maxJitter property value. Maximum jitter for the stream computed as specified in RFC 3550, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @return DateInterval|null
    */
    public function getMaxJitter(): ?DateInterval {
        return $this->getBackingStore()->get('maxJitter');
    }

    /**
     * Gets the maxPacketLossRate property value. Maximum packet loss rate for the stream.
     * @return float|null
    */
    public function getMaxPacketLossRate(): ?float {
        return $this->getBackingStore()->get('maxPacketLossRate');
    }

    /**
     * Gets the maxRatioOfConcealedSamples property value. Maximum ratio of packets concealed by the healer.
     * @return float|null
    */
    public function getMaxRatioOfConcealedSamples(): ?float {
        return $this->getBackingStore()->get('maxRatioOfConcealedSamples');
    }

    /**
     * Gets the maxRoundTripTime property value. Maximum network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @return DateInterval|null
    */
    public function getMaxRoundTripTime(): ?DateInterval {
        return $this->getBackingStore()->get('maxRoundTripTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the packetUtilization property value. Packet count for the stream.
     * @return int|null
    */
    public function getPacketUtilization(): ?int {
        return $this->getBackingStore()->get('packetUtilization');
    }

    /**
     * Gets the postForwardErrorCorrectionPacketLossRate property value. Packet loss rate after FEC has been applied aggregated across all video streams and codecs.
     * @return float|null
    */
    public function getPostForwardErrorCorrectionPacketLossRate(): ?float {
        return $this->getBackingStore()->get('postForwardErrorCorrectionPacketLossRate');
    }

    /**
     * Gets the startDateTime property value. UTC time when the stream started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the streamDirection property value. The streamDirection property
     * @return MediaStreamDirection|null
    */
    public function getStreamDirection(): ?MediaStreamDirection {
        return $this->getBackingStore()->get('streamDirection');
    }

    /**
     * Gets the streamId property value. Unique identifier for the stream.
     * @return string|null
    */
    public function getStreamId(): ?string {
        return $this->getBackingStore()->get('streamId');
    }

    /**
     * Gets the videoCodec property value. Codec name used to encode video for transmission on the network. Possible values are: unknown, invalid, av1, h263, h264, h264s, h264uc, h265, rtvc1, rtVideo, xrtvc1, unknownFutureValue.
     * @return VideoCodec|null
    */
    public function getVideoCodec(): ?VideoCodec {
        return $this->getBackingStore()->get('videoCodec');
    }

    /**
     * Gets the wasMediaBypassed property value. True if the media stream bypassed the Mediation Server and went straight between client and PSTN Gateway/PBX, false otherwise.
     * @return bool|null
    */
    public function getWasMediaBypassed(): ?bool {
        return $this->getBackingStore()->get('wasMediaBypassed');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('audioCodec', $this->getAudioCodec());
        $writer->writeFloatValue('averageAudioDegradation', $this->getAverageAudioDegradation());
        $writer->writeDateIntervalValue('averageAudioNetworkJitter', $this->getAverageAudioNetworkJitter());
        $writer->writeIntegerValue('averageBandwidthEstimate', $this->getAverageBandwidthEstimate());
        $writer->writeDateIntervalValue('averageJitter', $this->getAverageJitter());
        $writer->writeFloatValue('averagePacketLossRate', $this->getAveragePacketLossRate());
        $writer->writeFloatValue('averageRatioOfConcealedSamples', $this->getAverageRatioOfConcealedSamples());
        $writer->writeFloatValue('averageReceivedFrameRate', $this->getAverageReceivedFrameRate());
        $writer->writeDateIntervalValue('averageRoundTripTime', $this->getAverageRoundTripTime());
        $writer->writeFloatValue('averageVideoFrameLossPercentage', $this->getAverageVideoFrameLossPercentage());
        $writer->writeFloatValue('averageVideoFrameRate', $this->getAverageVideoFrameRate());
        $writer->writeFloatValue('averageVideoPacketLossRate', $this->getAverageVideoPacketLossRate());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeFloatValue('lowFrameRateRatio', $this->getLowFrameRateRatio());
        $writer->writeFloatValue('lowVideoProcessingCapabilityRatio', $this->getLowVideoProcessingCapabilityRatio());
        $writer->writeDateIntervalValue('maxAudioNetworkJitter', $this->getMaxAudioNetworkJitter());
        $writer->writeDateIntervalValue('maxJitter', $this->getMaxJitter());
        $writer->writeFloatValue('maxPacketLossRate', $this->getMaxPacketLossRate());
        $writer->writeFloatValue('maxRatioOfConcealedSamples', $this->getMaxRatioOfConcealedSamples());
        $writer->writeDateIntervalValue('maxRoundTripTime', $this->getMaxRoundTripTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('packetUtilization', $this->getPacketUtilization());
        $writer->writeFloatValue('postForwardErrorCorrectionPacketLossRate', $this->getPostForwardErrorCorrectionPacketLossRate());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('streamDirection', $this->getStreamDirection());
        $writer->writeStringValue('streamId', $this->getStreamId());
        $writer->writeEnumValue('videoCodec', $this->getVideoCodec());
        $writer->writeBooleanValue('wasMediaBypassed', $this->getWasMediaBypassed());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the audioCodec property value. Codec name used to encode audio for transmission on the network. Possible values are: unknown, invalid, cn, pcma, pcmu, amrWide, g722, g7221, g7221c, g729, multiChannelAudio, muchv2, opus, satin, satinFullband, rtAudio8, rtAudio16, silk, silkNarrow, silkWide, siren, xmsRTA, unknownFutureValue.
     * @param AudioCodec|null $value Value to set for the audioCodec property.
    */
    public function setAudioCodec(?AudioCodec $value): void {
        $this->getBackingStore()->set('audioCodec', $value);
    }

    /**
     * Sets the averageAudioDegradation property value. Average Network Mean Opinion Score degradation for stream. Represents how much the network loss and jitter has impacted the quality of received audio.
     * @param float|null $value Value to set for the averageAudioDegradation property.
    */
    public function setAverageAudioDegradation(?float $value): void {
        $this->getBackingStore()->set('averageAudioDegradation', $value);
    }

    /**
     * Sets the averageAudioNetworkJitter property value. Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @param DateInterval|null $value Value to set for the averageAudioNetworkJitter property.
    */
    public function setAverageAudioNetworkJitter(?DateInterval $value): void {
        $this->getBackingStore()->set('averageAudioNetworkJitter', $value);
    }

    /**
     * Sets the averageBandwidthEstimate property value. Average estimated bandwidth available between two endpoints in bits per second.
     * @param int|null $value Value to set for the averageBandwidthEstimate property.
    */
    public function setAverageBandwidthEstimate(?int $value): void {
        $this->getBackingStore()->set('averageBandwidthEstimate', $value);
    }

    /**
     * Sets the averageJitter property value. Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @param DateInterval|null $value Value to set for the averageJitter property.
    */
    public function setAverageJitter(?DateInterval $value): void {
        $this->getBackingStore()->set('averageJitter', $value);
    }

    /**
     * Sets the averagePacketLossRate property value. Average packet loss rate for stream.
     * @param float|null $value Value to set for the averagePacketLossRate property.
    */
    public function setAveragePacketLossRate(?float $value): void {
        $this->getBackingStore()->set('averagePacketLossRate', $value);
    }

    /**
     * Sets the averageRatioOfConcealedSamples property value. Ratio of the number of audio frames with samples generated by packet loss concealment to the total number of audio frames.
     * @param float|null $value Value to set for the averageRatioOfConcealedSamples property.
    */
    public function setAverageRatioOfConcealedSamples(?float $value): void {
        $this->getBackingStore()->set('averageRatioOfConcealedSamples', $value);
    }

    /**
     * Sets the averageReceivedFrameRate property value. Average frames per second received for all video streams computed over the duration of the session.
     * @param float|null $value Value to set for the averageReceivedFrameRate property.
    */
    public function setAverageReceivedFrameRate(?float $value): void {
        $this->getBackingStore()->set('averageReceivedFrameRate', $value);
    }

    /**
     * Sets the averageRoundTripTime property value. Average network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @param DateInterval|null $value Value to set for the averageRoundTripTime property.
    */
    public function setAverageRoundTripTime(?DateInterval $value): void {
        $this->getBackingStore()->set('averageRoundTripTime', $value);
    }

    /**
     * Sets the averageVideoFrameLossPercentage property value. Average percentage of video frames lost as displayed to the user.
     * @param float|null $value Value to set for the averageVideoFrameLossPercentage property.
    */
    public function setAverageVideoFrameLossPercentage(?float $value): void {
        $this->getBackingStore()->set('averageVideoFrameLossPercentage', $value);
    }

    /**
     * Sets the averageVideoFrameRate property value. Average frames per second received for a video stream, computed over the duration of the session.
     * @param float|null $value Value to set for the averageVideoFrameRate property.
    */
    public function setAverageVideoFrameRate(?float $value): void {
        $this->getBackingStore()->set('averageVideoFrameRate', $value);
    }

    /**
     * Sets the averageVideoPacketLossRate property value. Average fraction of packets lost, as specified in [RFC 3550][], computed over the duration of the session.
     * @param float|null $value Value to set for the averageVideoPacketLossRate property.
    */
    public function setAverageVideoPacketLossRate(?float $value): void {
        $this->getBackingStore()->set('averageVideoPacketLossRate', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the endDateTime property value. UTC time when the stream ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the lowFrameRateRatio property value. Fraction of the call where frame rate is less than 7.5 frames per second.
     * @param float|null $value Value to set for the lowFrameRateRatio property.
    */
    public function setLowFrameRateRatio(?float $value): void {
        $this->getBackingStore()->set('lowFrameRateRatio', $value);
    }

    /**
     * Sets the lowVideoProcessingCapabilityRatio property value. Fraction of the call that the client is running less than 70% expected video processing capability.
     * @param float|null $value Value to set for the lowVideoProcessingCapabilityRatio property.
    */
    public function setLowVideoProcessingCapabilityRatio(?float $value): void {
        $this->getBackingStore()->set('lowVideoProcessingCapabilityRatio', $value);
    }

    /**
     * Sets the maxAudioNetworkJitter property value. Maximum of audio network jitter computed over each of the 20 second windows during the session, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @param DateInterval|null $value Value to set for the maxAudioNetworkJitter property.
    */
    public function setMaxAudioNetworkJitter(?DateInterval $value): void {
        $this->getBackingStore()->set('maxAudioNetworkJitter', $value);
    }

    /**
     * Sets the maxJitter property value. Maximum jitter for the stream computed as specified in RFC 3550, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @param DateInterval|null $value Value to set for the maxJitter property.
    */
    public function setMaxJitter(?DateInterval $value): void {
        $this->getBackingStore()->set('maxJitter', $value);
    }

    /**
     * Sets the maxPacketLossRate property value. Maximum packet loss rate for the stream.
     * @param float|null $value Value to set for the maxPacketLossRate property.
    */
    public function setMaxPacketLossRate(?float $value): void {
        $this->getBackingStore()->set('maxPacketLossRate', $value);
    }

    /**
     * Sets the maxRatioOfConcealedSamples property value. Maximum ratio of packets concealed by the healer.
     * @param float|null $value Value to set for the maxRatioOfConcealedSamples property.
    */
    public function setMaxRatioOfConcealedSamples(?float $value): void {
        $this->getBackingStore()->set('maxRatioOfConcealedSamples', $value);
    }

    /**
     * Sets the maxRoundTripTime property value. Maximum network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
     * @param DateInterval|null $value Value to set for the maxRoundTripTime property.
    */
    public function setMaxRoundTripTime(?DateInterval $value): void {
        $this->getBackingStore()->set('maxRoundTripTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the packetUtilization property value. Packet count for the stream.
     * @param int|null $value Value to set for the packetUtilization property.
    */
    public function setPacketUtilization(?int $value): void {
        $this->getBackingStore()->set('packetUtilization', $value);
    }

    /**
     * Sets the postForwardErrorCorrectionPacketLossRate property value. Packet loss rate after FEC has been applied aggregated across all video streams and codecs.
     * @param float|null $value Value to set for the postForwardErrorCorrectionPacketLossRate property.
    */
    public function setPostForwardErrorCorrectionPacketLossRate(?float $value): void {
        $this->getBackingStore()->set('postForwardErrorCorrectionPacketLossRate', $value);
    }

    /**
     * Sets the startDateTime property value. UTC time when the stream started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the streamDirection property value. The streamDirection property
     * @param MediaStreamDirection|null $value Value to set for the streamDirection property.
    */
    public function setStreamDirection(?MediaStreamDirection $value): void {
        $this->getBackingStore()->set('streamDirection', $value);
    }

    /**
     * Sets the streamId property value. Unique identifier for the stream.
     * @param string|null $value Value to set for the streamId property.
    */
    public function setStreamId(?string $value): void {
        $this->getBackingStore()->set('streamId', $value);
    }

    /**
     * Sets the videoCodec property value. Codec name used to encode video for transmission on the network. Possible values are: unknown, invalid, av1, h263, h264, h264s, h264uc, h265, rtvc1, rtVideo, xrtvc1, unknownFutureValue.
     * @param VideoCodec|null $value Value to set for the videoCodec property.
    */
    public function setVideoCodec(?VideoCodec $value): void {
        $this->getBackingStore()->set('videoCodec', $value);
    }

    /**
     * Sets the wasMediaBypassed property value. True if the media stream bypassed the Mediation Server and went straight between client and PSTN Gateway/PBX, false otherwise.
     * @param bool|null $value Value to set for the wasMediaBypassed property.
    */
    public function setWasMediaBypassed(?bool $value): void {
        $this->getBackingStore()->set('wasMediaBypassed', $value);
    }

}
