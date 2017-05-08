<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of VoidShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class VoidShipmentRequest extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'VoidShipmentRequest';
    
    /**
     * @param Request $request
     * @return VoidShipmentRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param VoidShipment $voidShipment
     * @return VoidShipmentRequest
     */
    public function setVoidShipment($voidShipment) {
        return $this->VoidShipment = $voidShipment;
    }
}
