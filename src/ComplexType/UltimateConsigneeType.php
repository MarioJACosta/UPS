<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of UltimateConsigneeType
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UltimateConsigneeType extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'UltimateConsigneeType';
    
    /**
     * @param string $code
     * @return UltimateConsigneeType
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return UltimateConsigneeType
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
