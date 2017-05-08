<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PackageServiceOptions
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PackageServiceOptions extends AbstractComplexType {
    
    /**
     * @var string
     */
    protected $_name = 'PackageServiceOptions';
    
    /**
     * @param DeliveryConfirmation $deliveryConfirmation
     * @return PackageServiceOptions
     */
    public function setDeliveryConfirmation($deliveryConfirmation) {
        return $this->DeliveryConfirmation = $deliveryConfirmation;
    }
    
    /**
     * @param AccessPointCOD $accessPointCOD
     * @return PackageServiceOptions
     */
    public function setAccessPointCOD($accessPointCOD) {
        return $this->AccessPointCOD = $accessPointCOD;
    }
    
    /**
     * @param COD $COD
     * @return PackageServiceOptions
     */
    public function setCOD($COD) {
        return $this->COD = $COD;
    }
    
    /**
     * @param DeclaredValue $declaredValue
     * @return PackageServiceOptions
     */
    public function setDeclaredValue($declaredValue) {
        return $this->DeclaredValue = $declaredValue;
    }
    
    /**
     * @param ShipperDeclaredValue $shipperDeclaredValue
     * @return PackageServiceOptions
     */
    public function setShipperDeclaredValue($shipperDeclaredValue) {
        return $this->ShipperDeclaredValue = $shipperDeclaredValue;
    }
    
    /**
     * @param string $proactiveIndicator
     * @return PackageServiceOptions
     */
    public function setProactiveIndicator($proactiveIndicator) {
        return $this->ProactiveIndicator = $proactiveIndicator;
    }
    
    /**
     * @param Insurance $insurance
     * @return PackageServiceOptions
     */
    public function setInsurance($insurance) {
        return $this->Insurance = $insurance;
    }
    
    /**
     * @param string $verbalConfirmationIndicator
     * @return PackageServiceOptions
     */
    public function setVerbalConfirmationIndicator($verbalConfirmationIndicator) {
        return $this->VerbalConfirmationIndicator = $verbalConfirmationIndicator;
    }
    
    /**
     * @param strings $UPSPremiumCareIndicator
     * @return PackageServiceOptions
     */
    public function setUPSPremiumCareIndicator($UPSPremiumCareIndicator) {
        return $this->UPSPremiumCareIndicator = $UPSPremiumCareIndicator;
    }
    
    /**
     * @param DryIce $dryIce
     * @return PackageServiceOptions
     */
    public function setDryIce($dryIce) {
        return $this->DryIce = $dryIce;
    }
    
    /**
     * @param VerbalConfirmation $verbalConfirmation
     * @return PackageServiceOptions
     */
    public function setVerbalConfirmation($verbalConfirmation) {
        return $this->VerbalConfirmation = $verbalConfirmation;
    }
    
    /**
     * @param string $shipperReleaseIndicator
     * @return PackageServiceOptions
     */
    public function setShipperReleaseIndicator($shipperReleaseIndicator) {
        return $this->ShipperReleaseIndicator = $shipperReleaseIndicator;
    }
    
    /**
     * @param Notification $notification
     * @return PackageServiceOptions
     */
    public function setNotification($notification) {
        return $this->Notification = $notification;
    }
}
