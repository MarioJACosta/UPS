<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupCreationRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupCreationRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PickupCreationRequest';

    /**
     * @param Request $request
     * @return PickupCreationRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }

    /**
     * @param string $ratePickupIndicator
     * @return PickupCreationRequest
     */
    public function setRatePickupIndicator($ratePickupIndicator) {
        return $this->RatePickupIndicator = $ratePickupIndicator;
    }

    /**
     * @param string $taxInformationIndicator
     * @return PickupCreationRequest
     */
    public function setTaxInformationIndicator($taxInformationIndicator) {
        return $this->TaxInformationIndicator = $taxInformationIndicator;
    }

    /**
     * @param string $shipper
     * @return PickupCreationRequest
     */
    public function setShipper($shipper) {
        return $this->Shipper = $shipper;
    }

    /**
     * @param PickupDateInfo $pickupDateInfo
     * @return PickupCreationRequest
     */
    public function setPickupDateInfo($pickupDateInfo) {
        return $this->PickupDateInfo = $pickupDateInfo;
    }

    /**
     * @param PickupAddress $pickupAddress
     * @return PickupCreationRequest
     */
    public function setPickupAddress($pickupAddress) {
        return $this->PickupAddress = $pickupAddress;
    }

    /**
     * @param string $alternateAddressIndicator
     * @return PickupCreationRequest
     */
    public function setAlternateAddressIndicator($alternateAddressIndicator) {
        return $this->AlternateAddressIndicator = $alternateAddressIndicator;
    }

    /**
     * @param PickupPiece $pickupPiece
     * @return PickupCreationRequest
     */
    public function setPickupPiece($pickupPiece) {
        return $this->PickupPiece = $pickupPiece;
    }

    /**
     * @param TotalWeight $totalWeight
     * @return PickupCreationRequest
     */
    public function setTotalWeight($totalWeight) {
        return $this->TotalWeight = $totalWeight;
    }

    /**
     * @param string $overweightIndicator
     * @return PickupCreationRequest
     */
    public function setOverweightIndicator($overweightIndicator) {
        return $this->OverweightIndicator = $overweightIndicator;
    }

    /**
     * @param TrackingData $trackingData
     * @return PickupCreationRequest
     */
    public function setTrackingData($trackingData) {
        return $this->TrackingData = $trackingData;
    }

    /**
     * @param string $paymentMethod
     * @return PickupCreationRequest
     */
    public function setPaymentMethod($paymentMethod) {
        return $this->PaymentMethod = $paymentMethod;
    }

    /**
     * @param string $specialInstruction
     * @return PickupCreationRequest
     */
    public function setSpecialInstruction($specialInstruction) {
        return $this->SpecialInstruction = $specialInstruction;
    }

    /**
     * @param string $referenceNumber
     * @return PickupCreationRequest
     */
    public function setReferenceNumber($referenceNumber) {
        return $this->ReferenceNumber = $referenceNumber;
    }

    /**
     * @param FreightOptions $freightOptions
     * @return PickupCreationRequest
     */
    public function setFreightOptions($freightOptions) {
        return $this->FreightOptions = $freightOptions;
    }

    /**
     * @param string $serviceCategory
     * @return PickupCreationRequest
     */
    public function setServiceCategory($serviceCategory) {
        return $this->ServiceCategory = $serviceCategory;
    }
    
    /**
     * @param string $cashType
     * @return PickupCreationRequest
     */
    public function setCashType($cashType) {
        return $this->CashType = $cashType;
    }

    /**
     * @param string $shippingLabelsAvailable
     * @return PickupCreationRequest
     */
    public function setShippingLabelsAvailable($shippingLabelsAvailable) {
        return $this->ShippingLabelsAvailable = $shippingLabelsAvailable;
    }
}
