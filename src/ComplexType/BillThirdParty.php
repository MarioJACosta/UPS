<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of BillThirdParty
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class BillThirdParty extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'BillThirdParty';
    
    /**
     * @param string $accountNumber
     * @return BillThirdParty
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }
    
    /**
     * @param Address $address
     * @return BillThirdParty
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }
}
