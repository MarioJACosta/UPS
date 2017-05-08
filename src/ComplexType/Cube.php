<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Cube
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Cube extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Cube';
    
    /**
     * @param string $currencyCode
     * @return Cube
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }
    
    /**
     * @param string $monetaryValue
     * @return Cube
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }

}
