<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupRateRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupRateRequest extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'PickupRateRequest';
    
    /**
     * @param Request $request
     * @return PickupRateRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param PickupAddress $pickupAddress
     * @return PickupRateRequest
     */
    public function setPickupAddress($pickupAddress) {
        return $this->PickupAddress = $pickupAddress;
    }
    
    /**
     * @param string $alternateAddressIndicator
     * @return PickupRateRequest
     */
    public function setAlternateAddressIndicator($alternateAddressIndicator) {
        return $this->AlternateAddressIndicator = $alternateAddressIndicator;
    }
    
    /**
     * @param string $serviceDateOption
     * @return PickupRateRequest
     */
    public function setServiceDateOption($serviceDateOption) {
        return $this->ServiceDateOption = $serviceDateOption;
    }
    
    /**
     * @param PickupDateInfo $pickupDateInfo
     * @return PickupRateRequest
     */
    public function setPickupDateInfo($pickupDateInfo) {
        return $this->PickupDateInfo = $pickupDateInfo;
    }
    
    /**
     * @param string $taxInformationIndicator
     * @return PickupRateRequest
     */
    public function setTaxInformationIndicator($taxInformationIndicator) {
        return $this->TaxInformationIndicator = $taxInformationIndicator;
    }
}
