<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Unit
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Unit extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Unit';
    
    /**
     * @param string $number
     * @return Unit
     */
    public function setNumber($number) {
        return $this->Number = $number;
    }
    
    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return Unit
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }
    
    /**
     * @param string $value
     * @return Unit
     */
    public function setValue($value) {
        return $this->Value = $value;
    }
}
