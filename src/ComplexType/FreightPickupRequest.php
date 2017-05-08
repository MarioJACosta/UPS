<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of FreightPickupRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightPickupRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'FreightPickupRequest';

    /**
     * @param Request $request
     * @return FreightPickupRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }

    /**
     * @param string $pickupRequestConfirmationNumber
     * @return FreightPickupRequest
     */
    public function setPickupRequestConfirmationNumber($pickupRequestConfirmationNumber) {
        return $this->PickupRequestConfirmationNumber = $pickupRequestConfirmationNumber;
    }

    /**
     * @param string $destinationPostalCode
     * @return FreightPickupRequest
     */
    public function setDestinationPostalCode($destinationPostalCode) {
        return $this->DestinationPostalCode = $destinationPostalCode;
    }

    /**
     * @param string $destinationCountryCode
     * @return FreightPickupRequest
     */
    public function setDestinationCountryCode($destinationCountryCode) {
        return $this->DestinationCountryCode = $destinationCountryCode;
    }

    /**
     * @param Requester $requester
     * @return FreightPickupRequest
     */
    public function setRequester($requester) {
        return $this->Requester = $requester;
    }

    /**
     * @param ShipFrom $shipFrom
     * @return FreightPickupRequest
     */
    public function setShipFrom($shipFrom) {
        return $this->ShipFrom = $shipFrom;
    }

    /**
     * @param ShipTo $shipTo
     * @return FreightPickupRequest
     */
    public function setShipTo($shipTo) {
        return $this->ShipTo = $shipTo;
    }

    /**
     * @param string $pickupDate
     * @return FreightPickupRequest
     */
    public function setPickupDate($pickupDate) {
        return $this->PickupDate = $pickupDate;
    }

    /**
     * @param string $earliestTimeReady
     * @return FreightPickupRequest
     */
    public function setEarliestTimeReady($earliestTimeReady) {
        return $this->EarliestTimeReady = $earliestTimeReady;
    }

    /**
     * @param string $latestTimeReady
     * @return FreightPickupRequest
     */
    public function setLatestTimeReady($latestTimeReady) {
        return $this->LatestTimeReady = $latestTimeReady;
    }

    /**
     * @param ShipmentServiceOptions $shipmentServiceOptions
     * @return FreightPickupRequest
     */
    public function setShipmentServiceOptions($shipmentServiceOptions) {
        return $this->ShipmentServiceOptions = $shipmentServiceOptions;
    }

    /**
     * @param ShipmentDetail $shipmentDetail
     * @return FreightPickupRequest
     */
    public function setShipmentDetail($shipmentDetail) {
        return $this->ShipmentDetail = $shipmentDetail;
    }

    /**
     * @param ExistingShipmentID $existingShipmentID
     * @return FreightPickupRequest
     */
    public function setExistingShipmentID($existingShipmentID) {
        return $this->ExistingShipmentID = $existingShipmentID;
    }

    /**
     * @param POM $pom
     * @return FreightPickupRequest
     */
    public function setPOM($pom) {
        return $this->POM = $pom;
    }

    /**
     * @param string $pickupInstructions
     * @return FreightPickupRequest
     */
    public function setPickupInstructions($pickupInstructions) {
        return $this->PickupInstructions = $pickupInstructions;
    }

    /**
     * @param string $additionalComments
     * @return FreightPickupRequest
     */
    public function setAdditionalComments($additionalComments) {
        return $this->AdditionalComments = $additionalComments;
    }

    /**
     * @param string $handlingInstructions
     * @return FreightPickupRequest
     */
    public function setHandlingInstructions($handlingInstructions) {
        return $this->HandlingInstructions = $handlingInstructions;
    }

    /**
     * @param string $specialInstructions
     * @return FreightPickupRequest
     */
    public function setSpecialInstructions($specialInstructions) {
        return $this->SpecialInstructions = $specialInstructions;
    }

    /**
     * @param string $deliveryInstructions
     * @return FreightPickupRequest
     */
    public function setDeliveryInstructions($deliveryInstructions) {
        return $this->DeliveryInstructions = $deliveryInstructions;
    }

}
