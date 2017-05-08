<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of DeclaredValue
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeclaredValue extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeclaredValue';

    /**
     * @param string $currencyCode
     * @return DeclaredValue
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }

    /**
     * @param string $monetaryValue
     * @return DeclaredValue
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }
    
    /**
     * @param Type $type
     * @return DeclaredValue
     */
    public function setType($type) {
        return $this->Type = $type;
    }

}
