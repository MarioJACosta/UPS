<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of CWT
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CWT extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CWT';
    
    /**
     * @param string $currencyCode
     * @return CWT
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }
    
    /**
     * @param string $monetaryValue
     * @return CWT
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }

}
