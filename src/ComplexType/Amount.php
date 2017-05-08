<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Amount
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Amount extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Amount';

    /**
     * @param string $currencyCode
     * @return Amount
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }

    /**
     * @param string $monetaryValue
     * @return Amount
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }

}
