<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of CreditCard
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CreditCard extends AbstractComplexType {
    
    /**
     * @var string
     */
    protected $_name = 'CreditCard';
    
    /**
     * @param string $type
     * @return CreditCard
     */
    public function setType($type) {
        return $this->Type = $type;
    }
    
    /**
     * @param string $number
     * @return CreditCard
     */
    public function setNumber($number) {
        return $this->Number = $number;
    }
    
    /**
     * @param string $expirationDate
     * @return CreditCard
     */
    public function setExpirationDate($expirationDate) {
        return $this->ExpirationDate = $expirationDate;
    }
    
    /**
     * @param string $securityCode
     * @return CreditCard
     */
    public function setSecurityCode($securityCode) {
        return $this->SecurityCode = $securityCode;
    }
    
    /**
     * @param Address $address
     * @return CreditCard
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }
}
