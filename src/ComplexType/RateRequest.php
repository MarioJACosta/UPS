<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of RateRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RateRequest extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'RateRequest';
    
    /**
     * @param Request $request
     * @return RateRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param PickupType $pickupType
     * @return RateRequest
     */
    public function setPickupType($pickupType) {
        return $this->PickupType = $pickupType;
    }
    
    /**
     * @param CustomerClassification $customerClassification
     * @return RateRequest
     */
    public function setCustomerClassification($customerClassification) {
        return $this->CustomerClassification = $customerClassification;
    }
    
    /**
     * @param Shipment $shipment
     * @return RateRequest
     */
    public function setShipment($shipment) {
        return $this->Shipment = $shipment;
    }
}
