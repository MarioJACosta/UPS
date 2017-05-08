<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of FreightCharges
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightCharges extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'FreightCharges';
    
    /**
     * @param string $monetaryValue
     * @return FreightCharges
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }
    
    /**
     * @param string $currencyCode
     * @return FreightCharges
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }
}
