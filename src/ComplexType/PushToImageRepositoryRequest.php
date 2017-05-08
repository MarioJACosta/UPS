<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PushToImageRepositoryRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PushToImageRepositoryRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PushToImageRepositoryRequest';

    /**
     * @param Request $request
     * @return PushToImageRepositoryRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }

    /**
     * @param string $shipperNumber
     * @return PushToImageRepositoryRequest
     */
    public function setShipperNumber($shipperNumber) {
        return $this->ShipperNumber = $shipperNumber;
    }

    /**
     * @param FormsHistoryDocumentID $formsHistoryDocumentID
     * @return PushToImageRepositoryRequest
     */
    public function setFormsHistoryDocumentID($formsHistoryDocumentID) {
        return $this->FormsHistoryDocumentID = $formsHistoryDocumentID;
    }

    /**
     * @param string $formsGroupID
     * @return PushToImageRepositoryRequest
     */
    public function setFormsGroupID($formsGroupID) {
        return $this->FormsGroupID = $formsGroupID;
    }

    /**
     * @param string $shipmentIdentifier
     * @return PushToImageRepositoryRequest
     */
    public function setShipmentIdentifier($shipmentIdentifier) {
        return $this->ShipmentIdentifier = $shipmentIdentifier;
    }

    /**
     * @param string $shipmentDateAndTime
     * @return PushToImageRepositoryRequest
     */
    public function setShipmentDateAndTime($shipmentDateAndTime) {
        return $this->ShipmentDateAndTime = $shipmentDateAndTime;
    }

    /**
     * @param string $shipmentType
     * @return PushToImageRepositoryRequest
     */
    public function setShipmentType($shipmentType) {
        return $this->ShipmentType = $shipmentType;
    }

    /**
     * @param string $PRQConfirmationNumber
     * @return PushToImageRepositoryRequest
     */
    public function setPRQConfirmationNumber($PRQConfirmationNumber) {
        return $this->PRQConfirmationNumber = $PRQConfirmationNumber;
    }

    /**
     * @param string $trackingNumber
     * @return PushToImageRepositoryRequest
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }

}
