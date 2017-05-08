<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupGetServiceCenterFacilitiesRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupGetServiceCenterFacilitiesRequest extends AbstractComplexType{
    /**
     * @var string
     */
    protected $_name = 'PickupGetServiceCenterFacilitiesRequest';
    
    /**
     * @param Request $request
     * @return PickupGetServiceCenterFacilitiesRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param PickupPiece $pickupPiece
     * @return PickupGetServiceCenterFacilitiesRequest
     */
    public function setPickupPiece($pickupPiece) {
        return $this->PickupPiece = $pickupPiece;
    }
    
    /**
     * @param OriginAddress $originAddress
     * @return PickupGetServiceCenterFacilitiesRequest
     */
    public function setOriginAddress($originAddress) {
        return $this->OriginAddress = $originAddress;
    }
    
    /**
     * @param DestinationAddress $destinationAddress
     * @return PickupGetServiceCenterFacilitiesRequest
     */
    public function setDestinationAddress($destinationAddress) {
        return $this->DestinationAddress = $destinationAddress;
    }
    
    /**
     * @param string $locale
     * @return PickupGetServiceCenterFacilitiesRequest
     */
    public function setLocale($locale) {
        return $this->Locale = $locale;
    }
    
    /**
     * @param string $proximitySearchIndicator
     * @return PickupGetServiceCenterFacilitiesRequest
     */
    public function setProximitySearchIndicator($proximitySearchIndicator) {
        return $this->ProximitySearchIndicator = $proximitySearchIndicator;
    }
}
