<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ReferenceValues
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ReferenceValues extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'ReferenceValues';
    
    /**
     * @param ReferenceNumber $referenceNumber
     * @return ReferenceValues
     */
    public function setReferenceNumber($referenceNumber) {
        return $this->ReferenceNumber = $referenceNumber;
    }
    
    /**
     * @param string $shipperNumber
     * @return ReferenceValues
     */
    public function setShipperNumber($shipperNumber) {
        return $this->ShipperNumber = $shipperNumber;
    }
}
