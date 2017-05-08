<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Quantity
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Quantity extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Quantity';

    /**
     * @param string $value
     * @return Quantity
     */
    public function setValue($value) {
        return $this->Value = $value;
    }
    
    /**
     * @param UnitOfMeasure $unitOfMeasure
     * @return Quantity
     */
    public function setUnitOfMeasure($unitOfMeasure) {
        return $this->UnitOfMeasure = $unitOfMeasure;
    }
}
