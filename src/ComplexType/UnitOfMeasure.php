<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of UnitOfMeasure
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UnitOfMeasure extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UnitOfMeasure';

    /**
     * @param string $unitCode
     * @return UnitOfMeasure
     */
    public function setUnitCode($unitCode) {
        return $this->UnitCode = $unitCode;
    }

    /**
     * @param string $unitDescription
     * @return UnitOfMeasure
     */
    public function setUnitDescription($unitDescription) {
        return $this->UnitDescription = $unitDescription;
    }

}
