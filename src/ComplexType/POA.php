<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of POA
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class POA extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'POA';
    
    /**
     * @param string $code
     * @return POA
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return POA
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
