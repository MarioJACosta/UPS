<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of CN22Content
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CN22Content extends AbstractComplexType{
    
    /**
     * @var strings
     */
    protected $_name = 'CN22Content';
    
    /**
     * @param string $CN22ContentQuantity
     * @return CN22Content
     */
    public function setCN22ContentQuantity($CN22ContentQuantity) {
        return $this->CN22ContentQuantity = $CN22ContentQuantity;
    }
    
    /**
     * @param string $CN22ContentDescription
     * @return CN22Content
     */
    public function setCN22ContentDescription($CN22ContentDescription) {
        return $this->CN22ContentDescription = $CN22ContentDescription;
    }
    
    /**
     * @param CN22ContentWeight $CN22ContentWeight
     * @return CN22Content
     */
    public function setCN22ContentWeight($CN22ContentWeight) {
        return $this->CN22ContentWeight = $CN22ContentWeight;
    }
    
    /**
     * @param string $CN22ContentTotalValue
     * @return CN22Content
     */
    public function setCN22ContentTotalValue($CN22ContentTotalValue) {
        return $this->CN22ContentTotalValue = $CN22ContentTotalValue;
    }
    
    /**
     * @param string $CN22ContentCurrencyCode
     * @return CN22Content
     */
    public function setCN22ContentCurrencyCode($CN22ContentCurrencyCode) {
        return $this->CN22ContentCurrencyCode = $CN22ContentCurrencyCode;
    }
    
    /**
     * @param string $CN22ContentCountryOfOrigin
     * @return CN22Content
     */
    public function setCN22ContentCountryOfOrigin($CN22ContentCountryOfOrigin) {
        return $this->CN22ContentCountryOfOrigin = $CN22ContentCountryOfOrigin;
    }
    
    /**
     * @param string $CN22ContentTariffNumber
     * @return CN22Content
     */
    public function setCN22ContentTariffNumber($CN22ContentTariffNumber) {
        return $this->CN22ContentTariffNumber = $CN22ContentTariffNumber;
    }
}
