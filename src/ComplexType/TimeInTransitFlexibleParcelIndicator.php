<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of TimeInTransitFlexibleParcelIndicator
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TimeInTransitFlexibleParcelIndicator extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'TimeInTransitFlexibleParcelIndicator';
    
    /**
     * @param string $currencyCode
     * @return TimeInTransitFlexibleParcelIndicator
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }
    
    /**
     * @param string $monetaryValue
     * @return TimeInTransitFlexibleParcelIndicator
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }
}
