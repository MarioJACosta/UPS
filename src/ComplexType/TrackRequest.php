<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of TrackRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TrackRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TrackRequest';

    /**
     * @param Request $request
     * @return TrackRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }

    /**
     * @param string $inquiryNumber
     * @return TrackRequest
     */
    public function setInquiryNumber($inquiryNumber) {
        return $this->InquiryNumber = $inquiryNumber;
    }

    /**
     * @param string $includeMailInnovationIndicator
     * @return TrackRequest
     */
    public function setIncludeMailInnovationIndicator($includeMailInnovationIndicator) {
        return $this->IncludeMailInnovationIndicator = $includeMailInnovationIndicator;
    }

    /**
     * @param string $trackingOption
     * @return TrackRequest
     */
    public function setTrackingOption($trackingOption) {
        return $this->TrackingOption = $trackingOption;
    }

    /**
     * @param string $candidateBookmark
     * @return TrackRequest
     */
    public function setCandidateBookmark($candidateBookmark) {
        return $this->CandidateBookmark = $candidateBookmark;
    }

    /**
     * @param ReferenceNumber $referenceNumber
     * @return TrackRequest
     */
    public function setReferenceNumber($referenceNumber) {
        return $this->ReferenceNumber = $referenceNumber;
    }

    /**
     * @param PickupDateRange $pickupDateRange
     * @return TrackRequest
     */
    public function setPickupDateRange($pickupDateRange) {
        return $this->PickupDateRange = $pickupDateRange;
    }

    /**
     * @param string $shipperNumber
     * @return TrackRequest
     */
    public function setShipperNumber($shipperNumber) {
        return $this->ShipperNumber = $shipperNumber;
    }

    /**
     * @param ShipFrom $shipFrom
     * @return TrackRequest
     */
    public function setShipFrom($shipFrom) {
        return $this->ShipFrom = $shipFrom;
    }

    /**
     * @param $shipTo $shipFrom
     * @return TrackRequest
     */
    public function setShipTo($shipTo) {
        return $this->ShipTo = $shipTo;
    }
    
    /**
     * @param ShipmentType $shipmentType
     * @return TrackRequest
     */
    public function setShipmentType($shipmentType) {
        return $this->ShipmentType = $shipmentType;
    }
    
    /**
     * @param ShipperAccountInfo $shipperAccountInfo
     * @return TrackRequest
     */
    public function setShipperAccountInfo($shipperAccountInfo) {
        return $this->ShipperAccountInfo = $shipperAccountInfo;
    }

}
