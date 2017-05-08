<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of BasicFlexibleParcelIndicator
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class BasicFlexibleParcelIndicator extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'BasicFlexibleParcelIndicator';

    /**
     * @param string $currencyCode
     * @return BasicFlexibleParcelIndicator
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }

    /**
     * @param string $monetaryValue
     * @return BasicFlexibleParcelIndicator
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }

}
