<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupType
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupType extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'PickupType';
    
    /**
     * @param string $code
     * @return PickupType
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return PickupType
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
