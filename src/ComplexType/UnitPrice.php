<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of UnitPrice
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UnitPrice extends AbstractComplexType {
    
    /**
     * @var string
     */
    protected $_name = 'UnitPrice';
    
    /**
     * @param string $monetaryValue
     * @return UnitPrice
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }
    
    /**
     * @param string $currencyCode
     * @return UnitPrice
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }
}
