<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of TotalWeight
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TotalWeight extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TotalWeight';

    /**
     * @param string $weight
     * @return TotalWeight
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }

    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return TotalWeight
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }

}
