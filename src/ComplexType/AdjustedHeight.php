<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of AdjustedHeight
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AdjustedHeight extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'AdjustedHeight';
    
    /**
     * @param string $value
     * @return AdjustedHeight
     */
    public function setValue($value) {
        return $this->Value = $value;
    }
    
    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return AdjustedHeight
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }
}
