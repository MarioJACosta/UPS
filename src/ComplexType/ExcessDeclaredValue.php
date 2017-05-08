<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ExcessDeclaredValue
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExcessDeclaredValue extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ExcessDeclaredValue';

    /**
     * @param string $currencyCode
     * @return ExcessDeclaredValue
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }

    /**
     * @param string $monetaryValue
     * @return ExcessDeclaredValue
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }

}
