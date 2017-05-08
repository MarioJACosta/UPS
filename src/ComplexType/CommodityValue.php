<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of CommodityValue
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CommodityValue extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'CommodityValue';

    /**
     * @param string $currencyCode
     * @return CommodityValue
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }

    /**
     * @param string $monetaryValue
     * @return CommodityValue
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }

}
