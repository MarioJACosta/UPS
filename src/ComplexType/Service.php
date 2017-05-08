<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Service
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Service extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Service';
    
    /**
     * @param string $code
     * @return Service
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return Service
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
