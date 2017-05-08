<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of TransactionReference
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TransactionReference extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TransactionReference';

    /**
     * The client uses CustomerContext to synchronize request/response pairs. 
     * 
     * @param string $customerContext
     * @return TransactionReference
     */
    public function setCustomerContext($customerContext) {
        return $this->CustomerContext = $customerContext;
    }
    
    /**
     * @param string $transactionIdentifier
     * @return TransactionReference
     */
    public function setTransactionIdentifier($transactionIdentifier) {
        return $this->TransactionIdentifier = $transactionIdentifier;
    }

}
