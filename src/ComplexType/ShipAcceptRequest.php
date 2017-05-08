<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipAcceptRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipAcceptRequest extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'ShipAcceptRequest';
    
    /**
     * @param Request $request
     * @return ShipAcceptRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param string $shipmentDigest
     * @return ShipAcceptRequest
     */
    public function setShipmentDigest($shipmentDigest) {
        return $this->ShipmentDigest = $shipmentDigest;
    }
}
