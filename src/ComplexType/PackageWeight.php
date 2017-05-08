<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PackageWeight
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PackageWeight extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'PackageWeight';
    
    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return PackageWeight
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }
    
    /**
     * @param string $weight
     * @return PackageWeight
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }
}
