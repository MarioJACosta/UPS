<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipmentServiceOptions
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentServiceOptions extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentServiceOptions';

    /**
     * @param string $freezableProtectionIndicator
     * @return ShipmentServiceOptions
     */
    public function setFreezableProtectionIndicator($freezableProtectionIndicator) {
        return $this->FreezableProtectionIndicator = $freezableProtectionIndicator;
    }

    /**
     * @param string $limitedAccessPickupIndicator
     * @return ShipmentServiceOptions
     */
    public function setLimitedAccessPickupIndicator($limitedAccessPickupIndicator) {
        return $this->LimitedAccessPickupIndicator = $limitedAccessPickupIndicator;
    }

    /**
     * @param sting $extremeLengthIndicator
     * @return ShipmentServiceOptions
     */
    public function setExtremeLengthIndicator($extremeLengthIndicator) {
        return $this->ExtremeLengthIndicator = $extremeLengthIndicator;
    }

    /**
     * @param string $originLiftGateIndicator
     * @return ShipmentServiceOptions
     */
    public function setOriginLiftGateIndicator($originLiftGateIndicator) {
        return $this->OriginLiftGateIndicator = $originLiftGateIndicator;
    }

    /**
     * @param string $dropoffAtUPSFacilityIndicator
     * @return ShipmentServiceOptions
     */
    public function setDropoffAtUPSFacilityIndicator($dropoffAtUPSFacilityIndicator) {
        return $this->DropoffAtUPSFacilityIndicator = $dropoffAtUPSFacilityIndicator;
    }

    /**
     * @param string $HoldForPickupIndicator
     * @return ShipmentServiceOptions
     */
    public function setHoldForPickupIndicator($HoldForPickupIndicator) {
        return $this->HoldForPickupIndicator = $HoldForPickupIndicator;
    }

    /**
     * @param string $saturdayPickupIndicator
     * @return ShipmentServiceOptions
     */
    public function setSaturdayPickupIndicator($saturdayPickupIndicator) {
        return $this->SaturdayPickupIndicator = $saturdayPickupIndicator;
    }

    /**
     * @param string $saturdayDeliveryIndicator
     * @return ShipmentServiceOptions
     */
    public function setSaturdayDeliveryIndicator($saturdayDeliveryIndicator) {
        return $this->SaturdayDeliveryIndicator = $saturdayDeliveryIndicator;
    }

    /**
     * @param AccessPointCOD $accessPointCOD
     * @return ShipmentServiceOptions
     */
    public function setAccessPointCOD($accessPointCOD) {
        return $this->AccessPointCOD = $accessPointCOD;
    }

    /**
     * @param string $deliverToAddresseeOnlyIndicator
     * @return ShipmentServiceOptions
     */
    public function setDeliverToAddresseeOnlyIndicator($deliverToAddresseeOnlyIndicator) {
        return $this->DeliverToAddresseeOnlyIndicator = $deliverToAddresseeOnlyIndicator;
    }

    /**
     * @param string $directDeliveryOnlyIndicator
     * @return ShipmentServiceOptions
     */
    public function setDirectDeliveryOnlyIndicator($directDeliveryOnlyIndicator) {
        return $this->DirectDeliveryOnlyIndicator = $directDeliveryOnlyIndicator;
    }

    /**
     * @param COD $COD
     * @return ShipmentServiceOptions
     */
    public function setCOD($COD) {
        return $this->COD = $COD;
    }

    /**
     * @param DeliveryConfirmation $deliveryConfirmation
     * @return ShipmentServiceOptions
     */
    public function setDeliveryConfirmation($deliveryConfirmation) {
        return $this->DeliveryConfirmation = $deliveryConfirmation;
    }

    /**
     * @param string $returnOfDocumentIndicator
     * @return ShipmentServiceOptions
     */
    public function setReturnOfDocumentIndicator($returnOfDocumentIndicator) {
        return $this->ReturnOfDocumentIndicator = $returnOfDocumentIndicator;
    }

    /**
     * @param string $UPScarbonneutralIndicator
     * @return ShipmentServiceOptions
     */
    public function setUPScarbonneutralIndicator($UPScarbonneutralIndicator) {
        return $this->UPScarbonneutralIndicator = $UPScarbonneutralIndicator;
    }

    /**
     * @param string $certificateOfOriginIndicator
     * @return ShipmentServiceOptions
     */
    public function setCertificateOfOriginIndicator($certificateOfOriginIndicator) {
        return $this->CertificateOfOriginIndicator = $certificateOfOriginIndicator;
    }

    /**
     * @param PickupOptions $pickupOptions
     * @return ShipmentServiceOptions
     */
    public function setPickupOptions($pickupOptions) {
        return $this->PickupOptions = $pickupOptions;
    }

    /**
     * @param DeliveryOptions $deliveryOptions
     * @return ShipmentServiceOptions
     */
    public function setDeliveryOptions($deliveryOptions) {
        return $this->DeliveryOptions = $deliveryOptions;
    }

    /**
     * @param RestrictedArticles $restrictedArticles
     * @return ShipmentServiceOptions
     */
    public function setRestrictedArticles($restrictedArticles) {
        return $this->RestrictedArticles = $restrictedArticles;
    }

    /**
     * @param string $commercialInvoiceRemovalIndicator
     * @return ShipmentServiceOptions
     */
    public function setCommercialInvoiceRemovalIndicator($commercialInvoiceRemovalIndicator) {
        return $this->CommercialInvoiceRemovalIndicator = $commercialInvoiceRemovalIndicator;
    }

    /**
     * @param ImportControl $importControl
     * @return ShipmentServiceOptions
     */
    public function setImportControl($importControl) {
        return $this->ImportControl = $importControl;
    }

    /**
     * @param ReturnService $returnService
     * @return ShipmentServiceOptions
     */
    public function setReturnService($returnService) {
        return $this->ReturnService = $returnService;
    }

    /**
     * @param string $SDLShipmentIndicator
     * @return ShipmentServiceOptions
     */
    public function setSDLShipmentIndicator($SDLShipmentIndicator) {
        return $this->SDLShipmentIndicator = $SDLShipmentIndicator;
    }

    /**
     * @param string $EPRAIndicator
     * @return ShipmentServiceOptions
     */
    public function setEPRAIndicator($EPRAIndicator) {
        return $this->EPRAIndicator = $EPRAIndicator;
    }

    /**
     * @param Notification $notification
     * @return ShipmentServiceOptions
     */
    public function setNotification($notification) {
        return $this->Notification = $notification;
    }

    /**
     * @param LabelDelivery $labelDelivery
     * @return ShipmentServiceOptions
     */
    public function setLabelDelivery($labelDelivery) {
        return $this->LabelDelivery = $labelDelivery;
    }

    /**
     * @param InternationalForms $internationalForms
     * @return ShipmentServiceOptions
     */
    public function setInternationalForms($internationalForms) {
        return $this->InternationalForms = $internationalForms;
    }

    /**
     * @param string $importControlIndicator
     * @return ShipmentServiceOptions
     */
    public function setImportControlIndicator($importControlIndicator) {
        return $this->ImportControlIndicator = $importControlIndicator;
    }

    /**
     * @param LabelMethod $labelMethod
     * @return ShipmentServiceOptions
     */
    public function setLabelMethod($labelMethod) {
        return $this->LabelMethod = $labelMethod;
    }

    /**
     * @param string $preAlertNotification
     * @return ShipmentServiceOptions
     */
    public function setPreAlertNotification($preAlertNotification) {
        return $this->PreAlertNotification = $preAlertNotification;
    }

    /**
     * @param string $exchangeForwardIndicator
     * @return ShipmentServiceOptions
     */
    public function setExchangeForwardIndicator($exchangeForwardIndicator) {
        return $this->ExchangeForwardIndicator = $exchangeForwardIndicator;
    }

    /**
     * @param string $liftGateForPickUpIndicator
     * @return ShipmentServiceOptions
     */
    public function setLiftGateForPickUpIndicator($liftGateForPickUpIndicator) {
        return $this->LiftGateForPickUpIndicator = $liftGateForPickUpIndicator;
    }

    /**
     * @param string $liftGateForDeliveryIndicator
     * @return ShipmentServiceOptions
     */
    public function setLiftGateForDeliveryIndicator($liftGateForDeliveryIndicator) {
        return $this->LiftGateForDeliveryIndicator = $liftGateForDeliveryIndicator;
    }

    /**
     * @param string $EPRAReleaseCode
     * @return ShipmentServiceOptions
     */
    public function setEPRAReleaseCode($EPRAReleaseCode) {
        return $this->EPRAReleaseCode = $EPRAReleaseCode;
    }

    /**
     * @param Package $package
     * @return ShipmentServiceOptions
     */
    public function setPackage($package) {
        return $this->Package = $package;
    }

    /**
     * @param EMailInformation $eMailInformation
     * @return ShipmentServiceOptions
     */
    public function setEMailInformation($eMailInformation) {
        return $this->EMailInformation = $eMailInformation;
    }

    /**
     * @param OverSeasLeg $overSeasLeg
     * @return ShipmentServiceOptions
     */
    public function setOverSeasLeg($overSeasLeg) {
        return $this->OverSeasLeg = $overSeasLeg;
    }

    /**
     * @param DangerousGoods $dangerousGoods
     * @return ShipmentServiceOptions
     */
    public function setDangerousGoods($dangerousGoods) {
        return $this->DangerousGoods = $dangerousGoods;
    }
    
    /**
     * @param SortingAndSegregating $sortingAndSegregating
     * @return ShipmentServiceOptions
     */
    public function setSortingAndSegregating($sortingAndSegregating) {
        return $this->SortingAndSegregating = $sortingAndSegregating;
    }

    /**
     * @param ExcessDeclaredValue $excessDeclaredValue
     * @return ShipmentServiceOptions
     */
    public function setExcessDeclaredValue($excessDeclaredValue) {
        return $this->ExcessDeclaredValue = $excessDeclaredValue;
    }
    
    /**
     * @param HandlingCharge $handlingCharge
     * @return ShipmentServiceOptions
     */
    public function setHandlingCharge($handlingCharge) {
        return $this->HandlingCharge = $handlingCharge;
    }
}
