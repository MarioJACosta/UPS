<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of InsuranceCharges
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class InsuranceCharges extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'InsuranceCharges';
    
    /**
     * @param string $monetaryValue
     * @return InsuranceCharges
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }
}
