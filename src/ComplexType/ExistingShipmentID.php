<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ExistingShipmentID
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExistingShipmentID extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'ExistingShipmentID';
    
    /**
     * @param string $shipmentNumber
     * @return ExistingShipmentID
     */
    public function setShipmentNumber($shipmentNumber) {
        return $this->ShipmentNumber = $shipmentNumber;
    }
    
    /**
     * @param string $bolid
     * @return ExistingShipmentID
     */
    public function setBOLID($bolid) {
        return $this->BOLID = $bolid;
    }
    
    /**
     * @param ConfirmationNumber $confirmationNumber
     * @return ExistingShipmentID
     */
    public function setConfirmationNumber($confirmationNumber) {
        return $this->ConfirmationNumber = $confirmationNumber;
    }
}
