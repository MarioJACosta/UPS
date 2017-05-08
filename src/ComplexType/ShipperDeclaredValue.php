<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipperDeclaredValue
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipperDeclaredValue extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipperDeclaredValue';

    /**
     * @param string $currencyCode
     * @return ShipperDeclaredValue
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }

    /**
     * @param string $monetaryValue
     * @return ShipperDeclaredValue
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }

}
