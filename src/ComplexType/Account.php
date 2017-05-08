<?php
namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Account
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Account extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Account';
    
    /**
     * @param string $accountNumber
     * @return Account
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }
    
    /**
     * @param string $accountCountryCode
     * @return Account
     */
    public function setAccountCountryCode($accountCountryCode){
        return $this->AccountCountryCode = $accountCountryCode;
    }
}
