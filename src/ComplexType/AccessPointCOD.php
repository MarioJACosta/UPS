<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of AccessPointCOD
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AccessPointCOD extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'AccessPointCOD';
    
    /**
     * @param string $currencyCode
     * @return AccessPointCOD
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }
    
    /**
     * @param string $monetaryValue
     * @return AccessPointCOD
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }
}
