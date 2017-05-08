<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ValuePerUnit
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ValuePerUnit extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'ValuePerUnit';
    
    /**
     * @param string $monetaryValue
     * @return ValuePerUnit
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }
    
    /**
     * @param string $currencyCode
     * @return ValuePerUnit
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }
}
