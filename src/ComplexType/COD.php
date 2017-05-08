<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of COD
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class COD extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'COD';
    
    /**
     * @param string $CODFundsCode
     * @return COD
     */
    public function setCODFundsCode($CODFundsCode) {
        return $this->CODFundsCode = $CODFundsCode;
    }
    
    /**
     * @param CODAmount $cODAmount
     * @return COD
     */
    public function setCODAmount($cODAmount) {
        return $this->CODAmount = $cODAmount;
    }
    
    /**
     * @param CODValue $CODValue
     * @return COD
     */
    public function setCODValue($CODValue) {
        return $this->CODValue = $CODValue;
    }
    
    /**
     * @param CODPaymentMethod $CODPaymentMethod
     * @return COD
     */
    public function setCODPaymentMethod($CODPaymentMethod) {
        return $this->CODPaymentMethod = $CODPaymentMethod;   
    }
    
    /**
     * @param CODBillingOption $CODBillingOption
     * @return COD
     */
    public function setCODBillingOption($CODBillingOption) {
        return $this->CODBillingOption = $CODBillingOption;
    }
    
    /**
     * @param RemitTo $remitTo
     * @return COD
     */
    public function setRemitTo($remitTo) {
        return $this->RemitTo = $remitTo;
    }
}
