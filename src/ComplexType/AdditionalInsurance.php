<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of AdditionalInsurance
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AdditionalInsurance extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'AdditionalInsurance';

    /**
     * @param string $monetaryValue
     * @return AdditionalInsurance
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }

    /**
     * @param string $currencyCode
     * @return AdditionalInsurance
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }
}
