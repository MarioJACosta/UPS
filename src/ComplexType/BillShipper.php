<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of BillShipper
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class BillShipper extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'BillShipper';

    /**
     * @param string $accountNumber
     * @return BillShipper
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }

    /**
     * @param CreditCard $creditCard
     * @return BillShipper
     */
    public function setCreditCard($creditCard) {
        return $this->CreditCard = $creditCard;
    }

    /**
     * @param string $alternatePaymentMethod
     * @return BillShipper
     */
    public function setAlternatePaymentMethod($alternatePaymentMethod) {
        return $this->AlternatePaymentMethod = $alternatePaymentMethod;
    }

}
