<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Shipment
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Shipment extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Shipment';

    /**
     * @param Shipper $shipper
     * @return Shipment
     */
    public function setShipper($shipper) {
        return $this->Shipper = $shipper;
    }

    /**
     * @param ShipTo $shipTo
     * @return Shipment
     */
    public function setShipTo($shipTo) {
        return $this->ShipTo = $shipTo;
    }

    /**
     * @param AlternateDeliveryAddress $alternateDeliveryAddress
     * @return Shipment
     */
    public function setAlternateDeliveryAddress($alternateDeliveryAddress) {
        return $this->AlternateDeliveryAddress = $alternateDeliveryAddress;
    }

    /**
     * @param ShipmentIndicationType $shipmentIndicationType
     * @return Shipment
     */
    public function setShipmentIndicationType($shipmentIndicationType) {
        return $this->ShipmentIndicationType = $shipmentIndicationType;
    }

    /**
     * @param FRSPaymentInformation $fRSPaymentInformation
     * @return Shipment
     */
    public function setFRSPaymentInformation($fRSPaymentInformation) {
        return $this->FRSPaymentInformation = $fRSPaymentInformation;
    }

    /**
     * @param FreightShipmentInformation $freightShipmentInformation
     * @return Shipment
     */
    public function setFreightShipmentInformation($freightShipmentInformation) {
        return $this->FreightShipmentInformation = $freightShipmentInformation;
    }

    /**
     * @param Service $service
     * @return Shipment
     */
    public function setService($service) {
        return $this->Service = $service;
    }

    /**
     * @param string $numOfPieces
     * @return Shipment
     */
    public function setNumOfPieces($numOfPieces) {
        return $this->NumOfPieces = $numOfPieces;
    }

    /**
     * @param string $documentsOnlyIndicator
     * @return Shipment
     */
    public function setDocumentsOnlyIndicator($documentsOnlyIndicator) {
        return $this->DocumentsOnlyIndicator = $documentsOnlyIndicator;
    }

    /**
     * @param Package $package
     * @return Shipment
     */
    public function setPackage($package) {
        return $this->Package = $package;
    }

    /**
     * @param ShipFrom $shipFrom
     * @return Shipment
     */
    public function setShipFrom($shipFrom) {
        return $this->ShipFrom = $shipFrom;
    }

    /**
     * @param ShipmentServiceOptions $shipmentServiceOptions
     * @return Shipment
     */
    public function setShipmentServiceOptions($shipmentServiceOptions) {
        return $this->ShipmentServiceOptions = $shipmentServiceOptions;
    }

    /**
     * @param ShipmentRatingOptions $shipmentRatingOptions
     * @return Shipment
     */
    public function setShipmentRatingOptions($shipmentRatingOptions) {
        return $this->ShipmentRatingOptions = $shipmentRatingOptions;
    }

    /**
     * @param InvoiceLineTotal $invoiceLineTotal
     * @return Shipment
     */
    public function setInvoiceLineTotal($invoiceLineTotal) {
        return $this->InvoiceLineTotal = $invoiceLineTotal;
    }

    /**
     * @param string $ratingMethodRequestedIndicator
     * @return Shipment
     */
    public function setRatingMethodRequestedIndicator($ratingMethodRequestedIndicator) {
        return $this->RatingMethodRequestedIndicator = $ratingMethodRequestedIndicator;
    }

    /**
     * @param string $taxInformationIndicator
     * @return Shipment
     */
    public function setTaxInformationIndicator($taxInformationIndicator) {
        return $this->TaxInformationIndicator = $taxInformationIndicator;
    }

    /**
     * @param string $description
     * @return Shipment
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

    /**
     * @param ReturnService $returnService
     * @return Shipment
     */
    public function setReturnService($returnService) {
        return $this->ReturnService = $returnService;
    }

    /**
     * @param PaymentInformation $paymentInformation
     * @return Shipment
     */
    public function setPaymentInformation($paymentInformation) {
        return $this->PaymentInformation = $paymentInformation;
    }

    /**
     * @param string $goodsNotInFreeCirculationIndicator
     * @return Shipment
     */
    public function setGoodsNotInFreeCirculationIndicator($goodsNotInFreeCirculationIndicator) {
        return $this->GoodsNotInFreeCirculationIndicator = $goodsNotInFreeCirculationIndicator;
    }

    /**
     * @param string $movementReferenceNumber
     * @return Shipment
     */
    public function setMovementReferenceNumber($movementReferenceNumber) {
        return $this->MovementReferenceNumber = $movementReferenceNumber;
    }

    /**
     * @param ReferenceNumber $referenceNumber
     * @return Shipment
     */
    public function setReferenceNumber($referenceNumber) {
        return $this->ReferenceNumber = $referenceNumber;
    }

    /**
     * @param string $numOfPiecesInShipment
     * @return Shipment
     */
    public function setNumOfPiecesInShipment($numOfPiecesInShipment) {
        return $this->NumOfPiecesInShipment = $numOfPiecesInShipment;
    }

    /**
     * @param string $USPSEndorsement
     * @return Shipment
     */
    public function setUSPSEndorsement($USPSEndorsement) {
        return $this->USPSEndorsement = $USPSEndorsement;
    }

    /**
     * @param string $MILabelCN22Indicator
     * @return Shipment
     */
    public function setMILabelCN22Indicator($MILabelCN22Indicator) {
        return $this->MILabelCN22Indicator = $MILabelCN22Indicator;
    }

    /**
     * @param string $subClassification
     * @return Shipment
     */
    public function setSubClassification($subClassification) {
        return $this->SubClassification = $subClassification;
    }

    /**
     * @param string $costCenter
     * @return Shipment
     */
    public function setCostCenter($costCenter) {
        return $this->CostCenter = $costCenter;
    }

    /**
     * @param string $packageID
     * @return Shipment
     */
    public function setPackageID($packageID) {
        return $this->PackageID = $packageID;
    }

    /**
     * @param string $irregularIndicator
     * @return Shipment
     */
    public function setIrregularIndicator($irregularIndicator) {
        return $this->IrregularIndicator = $irregularIndicator;
    }

    /**
     * @param string $shipperNumber
     * @return Shipment
     */
    public function setShipperNumber($shipperNumber) {
        return $this->ShipperNumber = $shipperNumber;
    }

    /**
     * @param HandlingUnitOne $handlingUnitOne
     * @return Shipment
     */
    public function setHandlingUnitOne($handlingUnitOne) {
        return $this->HandlingUnitOne = $handlingUnitOne;
    }

    /**
     * @param HandlingUnitTwo $handlingUnitTwo
     * @return Shipment
     */
    public function setHandlingUnitTwo($handlingUnitTwo) {
        return $this->HandlingUnitTwo = $handlingUnitTwo;
    }

    /**
     * @param ExistingShipmentID $existingShipmentID
     * @return Shipment
     */
    public function setExistingShipmentID($existingShipmentID) {
        return $this->ExistingShipmentID = $existingShipmentID;
    }

    /**
     * @param string $handlingInstructions
     * @return Shipment
     */
    public function setHandlingInstructions($handlingInstructions) {
        return $this->HandlingInstructions = $handlingInstructions;
    }

    /**
     * @param string $deliveryInstructions
     * @return Shipment
     */
    public function setDeliveryInstructions($deliveryInstructions) {
        return $this->DeliveryInstructions = $deliveryInstructions;
    }

    /**
     * @param string $pickupInstructions
     * @return Shipment
     */
    public function setPickupInstructions($pickupInstructions) {
        return $this->PickupInstructions = $pickupInstructions;
    }

    /**
     * @param Commodity $commodity
     * @return Shipment
     */
    public function setCommodity($commodity) {
        return $this->Commodity = $commodity;
    }

    /**
     * @param Reference $reference
     * @return Shipment
     */
    public function setReference($reference) {
        return $this->Reference = $reference;
    }

    /**
     * @param PickupRequest $pickupRequest
     * @return Shipment
     */
    public function setPickupRequest($pickupRequest) {
        return $this->PickupRequest = $pickupRequest;
    }

    /**
     * @param Documents $documents
     * @return Shipment
     */
    public function setDocuments($documents) {
        return $this->Documents = $documents;
    }

    /**
     * @param string $timeInTransitIndicator
     * @return Shipment
     */
    public function setTimeInTransitIndicator($timeInTransitIndicator) {
        return $this->TimeInTransitIndicator = $timeInTransitIndicator;
    }

    /**
     * @param HandlingUnits $handlingUnits
     * @return Shipment
     */
    public function setHandlingUnits($handlingUnits) {
        return $this->HandlingUnits = $handlingUnits;
    }

    /**
     * @param string $densityEligibleIndicator
     * @return Shipment
     */
    public function setDensityEligibleIndicator($densityEligibleIndicator) {
        return $this->DensityEligibleIndicator = $densityEligibleIndicator;
    }

    /**
     * @param string $originCountryCode
     * @return Shipment
     */
    public function setOriginCountryCode($originCountryCode) {
        return $this->OriginCountryCode = $originCountryCode;
    }

    /**
     * @param string $originStateProvinceCode
     * @return Shipment
     */
    public function setOriginStateProvinceCode($originStateProvinceCode) {
        return $this->OriginStateProvinceCode = $originStateProvinceCode;
    }

    /**
     * @param string $destinationCountryCode
     * @return Shipment
     */
    public function setDestinationCountryCode($destinationCountryCode) {
        return $this->DestinationCountryCode = $destinationCountryCode;
    }

    /**
     * @param string $destinationStateProvinceCode
     * @return Shipment
     */
    public function setDestinationStateProvinceCode($destinationStateProvinceCode) {
        return $this->DestinationStateProvinceCode = $destinationStateProvinceCode;
    }

    /**
     * @param string $transportationMode
     * @return Shipment
     */
    public function setTransportationMode($transportationMode) {
        return $this->TransportationMode = $transportationMode;
    }

    /**
     * @param FreightCharges $freightCharges
     * @return Shipment
     */
    public function setFreightCharges($freightCharges) {
        return $this->FreightCharges = $freightCharges;
    }

    /**
     * @param AdditionalInsurance $additionalInsurance
     * @return Shipment
     */
    public function setAdditionalInsurance($additionalInsurance) {
        return $this->AdditionalInsurance = $additionalInsurance;
    }

    /**
     * @param string $tariffCodeAlert
     * @return Shipment
     */
    public function setTariffCodeAlert($tariffCodeAlert) {
        return $this->TariffCodeAlert = $tariffCodeAlert;
    }
    
    /**
     * @param Product $product
     * @return Shipment
     */
    public function setProduct($product) {
        return $this->Product = $product;
    }

    /**
     * @param string $resultCurrencyCode
     * @return Shipment
     */
    public function setResultCurrencyCode($resultCurrencyCode) {
        return $this->ResultCurrencyCode = $resultCurrencyCode;
    }
    
    /**
     * @param Question $question
     * @return Shipment
     */
    public function setQuestion($question) {
        return $this->Question = $question;
    }
}
