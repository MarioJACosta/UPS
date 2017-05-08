<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Weight
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Weight extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Weight';
    
    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return Weight
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }
    
    /**
     * @param string $value
     * @return Weight
     */
    public function setValue($value) {
        return $this->Value = $value;
    }
    
    /**
     * @param UnitOfMeasure $unitOfMeasure
     * @return Weight
     */
    public function setUnitOfMeasure($unitOfMeasure) {
        return $this->UnitOfMeasure = $unitOfMeasure;
    }
}
