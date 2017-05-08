<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of HandlingUnitOne
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HandlingUnitOne extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'HandlingUnitOne';

    /**
     * @param string $quantity
     * @return HandlingUnitOne
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }
    
    /**
     * @param Type $type
     * @return HandlingUnitOne
     */
    public function setType($type) {
        return $this->Type = $type;
    }

}
