<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of HandlingUnitTwo
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HandlingUnitTwo extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'HandlingUnitTwo';

    /**
     * @param string $quantity
     * @return HandlingUnitTwo
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }
    
    /**
     * @param Type $type
     * @return HandlingUnitTwo
     */
    public function setType($type) {
        return $this->Type = $type;
    }

}
