<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Producer
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Producer extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'Producer';
    
    /**
     * @param string $option
     * @return Producer
     */
    public function setOption($option) {
        return $this->Option = $option;
    }
    
    /**
     * @param string $companyName
     * @return Producer
     */
    public function setCompanyName($companyName) {
        return $this->CompanyName = $companyName;
    }
    
    /**
     * @param string $taxIdentificationNumber
     * @return Producer
     */
    public function setTaxIdentificationNumber($taxIdentificationNumber) {
        return $this->TaxIdentificationNumber = $taxIdentificationNumber;
    }
    
    /**
     * @param Address $address
     * @return Producer
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }
    
    /**
     * @param string $attentionName
     * @return Producer
     */
    public function setAttentionName($attentionName) {
        return $this->AttentionName = $attentionName;
    }
    
    /**
     * @param Phone $phone
     * @return Producer
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }
    
    /**
     * @param string $EMailAddress
     * @return Producer
     */
    public function setEMailAddress($EMailAddress) {
        return $this->EMailAddress = $EMailAddress;
    }
    
    /**
     * @param SoldTo $soldTo
     * @return Producer
     */
    public function setSoldTo($soldTo) {
        return $this->SoldTo = $soldTo;
    }
}
