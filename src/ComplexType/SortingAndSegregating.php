<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of SortingAndSegregating
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SortingAndSegregating extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SortingAndSegregating';

    /**
     * @param string $quantity
     * @return SortingAndSegregating
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }
    
    /**
     * @param DeclaredValue $declaredValue
     * @return SortingAndSegregating
     */
    public function setDeclaredValue($declaredValue) {
        return $this->DeclaredValue = $declaredValue;
    }

}
