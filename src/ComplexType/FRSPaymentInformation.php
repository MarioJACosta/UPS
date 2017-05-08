<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of FRSPaymentInformation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FRSPaymentInformation extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'FRSPaymentInformation';
    
    /**
     * @param Type $type
     * @return FRSPaymentInformation
     */
    public function setType($type) {
        return $this->Type = $type;
    }
    
    /**
     * @param string $accountNumber
     * @return FRSPaymentInformation
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }
    
    /**
     * @param Address $address
     * @return FRSPaymentInformation
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }
}
