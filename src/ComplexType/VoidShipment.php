<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of VoidShipment
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class VoidShipment extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'VoidShipment';
    
    /**
     * @param string $shipmentIdentificationNumber
     * @return VoidShipment
     */
    public function setShipmentIdentificationNumber($shipmentIdentificationNumber) {
        return $this->ShipmentIdentificationNumber = $shipmentIdentificationNumber;
    }
    
    /**
     * @param string $trackingNumber
     * @return VoidShipment
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }
}
