<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of UnitOfMeasurement
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UnitOfMeasurement extends AbstractComplexType{

    /**
     * @var string
     */
    protected $_name = 'UnitOfMeasurement';

    /**
     * @param string $code
     * @return UnitOfMeasurement
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

    /**
     * @param string $description
     * @return UnitOfMeasurement
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

}
