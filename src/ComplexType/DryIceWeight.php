<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of DryIceWeight
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DryIceWeight extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DryIceWeight';

    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return DryIceWeight
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }

    /**
     * @param string $weight
     * @return DryIceWeight
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }
}
