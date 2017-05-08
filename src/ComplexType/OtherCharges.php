<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of OtherCharges
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class OtherCharges extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'OtherCharges';
    
    /**
     * @param string $monetaryValue
     * @return OtherCharges
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }
    
    /**
     * @param string $description
     * @return OtherCharges
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
