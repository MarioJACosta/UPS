<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of HandlingUnits
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HandlingUnits extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'HandlingUnits';
    
    /**
     * @param string $quantity
     * @return HandlingUnits
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }
    
    /**
     * @param Type $type
     * @return HandlingUnits
     */
    public function setType($type) {
        return $this->Type = $type;
    }
    
    /**
     * @param Dimensions $dimensions
     * @return HandlingUnits
     */
    public function setDimensions($dimensions) {
        return $this->Dimensions = $dimensions;
    }
}
