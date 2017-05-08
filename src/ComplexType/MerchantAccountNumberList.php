<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of MerchantAccountNumberList
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class MerchantAccountNumberList extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'MerchantAccountNumberList';
    
    /**
     * @param string $merchantAccountNumber
     * @return MerchantAccountNumberList
     */
    public function setMerchantAccountNumber($merchantAccountNumber) {
        return $this->MerchantAccountNumber = $merchantAccountNumber;
    }
}
