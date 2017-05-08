<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ForwardAgent
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ForwardAgent extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'ForwardAgent';
    
    /**
     * @param string $companyName
     * @return ForwardAgent
     */
    public function setCompanyName($companyName) {
        return $this->CompanyName = $companyName;
    }
    
    /**
     * @param string $taxIdentificationNumber
     * @return ForwardAgent
     */
    public function setTaxIdentificationNumber($taxIdentificationNumber) {
        return $this->TaxIdentificationNumber = $taxIdentificationNumber;
    }
    
    /**
     * @param Address $address
     * @return ForwardAgent
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }
}
