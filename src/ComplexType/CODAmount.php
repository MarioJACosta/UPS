<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of CODAmount
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CODAmount extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'CODAmount';
    
    /**
     * @param string $currencyCode
     * @return CODAmount
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }
    
    /**
     * @param string $monetaryValue
     * @return CODAmount
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }
}
