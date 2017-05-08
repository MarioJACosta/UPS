<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of FreightShipRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightShipRequest extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'FreightShipRequest';
    
    /**
     * @param Request $request
     * @return FreightShipRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param Shipment $shipment
     * @return FreightShipRequest
     */
    public function setShipment($shipment) {
        return $this->Shipment = $shipment;
    }
}
