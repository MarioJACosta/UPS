<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ServiceGeoUnit
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ServiceGeoUnit extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ServiceGeoUnit';

    /**
     * @param string $serviceCode
     * @return ServiceGeoUnit
     */
    public function setServiceCode($serviceCode) {
        return $this->ServiceCode = $serviceCode;
    }
    
    /**
     * @param string $geoPoliticalUnit
     * @return ServiceGeoUnit
     */
    public function setGeoPoliticalUnit($geoPoliticalUnit) {
        return $this->GeoPoliticalUnit = $geoPoliticalUnit;
    }
}
