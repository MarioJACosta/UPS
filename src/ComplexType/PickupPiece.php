<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupPiece
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupPiece extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'PickupPiece';
    
    /**
     * @param string $serviceCode
     * @return PickupPiece
     */
    public function setServiceCode($serviceCode) {
        return $this->ServiceCode = $serviceCode;
    }
    
    /**
     * @param string $quantity
     * @return PickupPiece
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }
    
    /**
     * @param string $destinationCountryCode
     * @return PickupPiece
     */
    public function setDestinationCountryCode($destinationCountryCode) {
        return $this->DestinationCountryCode = $destinationCountryCode;
    }
    
    /**
     * @param string $containerCode
     * @return PickupPiece
     */
    public function setContainerCode($containerCode) {
        return $this->ContainerCode = $containerCode;
    }
}
