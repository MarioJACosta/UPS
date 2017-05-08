<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of CN22ContentWeight
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CN22ContentWeight extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'CN22ContentWeight';
    
    /**
     * @param UnitOfMeasurement $UnitOfMeasurement
     * @return CN22ContentWeight
     */
    public function setUnitOfMeasurement($UnitOfMeasurement) {
        return $this->UnitOfMeasurement = $UnitOfMeasurement;
    }
    
    /**
     * @param string $weight
     * @return CN22ContentWeight
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }
}
