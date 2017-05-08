<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ServiceSearch
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ServiceSearch extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ServiceSearch';

    /**
     * @param string $time
     * @return ServiceSearch
     */
    public function setTime($time) {
        return $this->Time = $time;
    }

    /**
     * @param ServiceCode $serviceCode
     * @return ServiceSearch
     */
    public function setServiceCode($serviceCode) {
        return $this->ServiceCode = $serviceCode;
    }
    
    /**
     * @param ServiceOptionCode $serviceOptionCode
     * @return ServiceSearch
     */
    public function setServiceOptionCode($serviceOptionCode) {
        return $this->ServiceOptionCode = $serviceOptionCode;
    }

}
