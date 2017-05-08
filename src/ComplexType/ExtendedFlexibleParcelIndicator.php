<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ExtendedFlexibleParcelIndicator
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExtendedFlexibleParcelIndicator extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ExtendedFlexibleParcelIndicator';

    /**
     * @param string $currencyCode
     * @return ExtendedFlexibleParcelIndicator
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }

    /**
     * @param string $monetaryValue
     * @return ExtendedFlexibleParcelIndicator
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }

}
