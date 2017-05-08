<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipmentIndicationType
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentIndicationType extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'ShipmentIndicationType';
    
    /**
     * @param string $code
     * @return ShipmentIndicationType
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return ShipmentIndicationType
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
