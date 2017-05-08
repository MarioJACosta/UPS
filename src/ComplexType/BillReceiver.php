<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of BillReceiver
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class BillReceiver extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'BillReceiver';

    /**
     * @param string $accountNumber
     * @return BillReceiver
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }

    /**
     * @param Address $address
     * @return BillReceiver
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

}
