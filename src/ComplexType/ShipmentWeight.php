<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipmentWeight
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentWeight extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentWeight';
    
    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return ShipmentWeight
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }
    
    /**
     * @param string $weight
     * @return ShipmentWeight
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }

}
