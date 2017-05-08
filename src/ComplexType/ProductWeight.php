<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ProductWeight
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ProductWeight extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'ProductWeight';
    
    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return ProductWeight
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }
    
    /**
     * @param string $weight
     * @return ProductWeight
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }
}
