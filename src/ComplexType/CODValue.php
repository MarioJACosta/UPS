<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of CODValue
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CODValue extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CODValue';
    
    /**
     * @param string $currencyCode
     * @return CODValue
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }
    
    /**
     * @param string $monetaryValue
     * @return CODValue
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }

}
