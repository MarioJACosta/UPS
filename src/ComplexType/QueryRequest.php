<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of QueryRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class QueryRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'QueryRequest';

    /**
     * @param Shipment $shipment
     * @return QueryRequest
     */
    public function setShipment($shipment) {
        return $this->Shipment = $shipment;
    }
    
    /**
     * @param string $transactionReferenceID
     * @return QueryRequest
     */
    public function setTransactionReferenceID($transactionReferenceID) {
        return $this->TransactionReferenceID = $transactionReferenceID;
    }
    
    /**
     * @param string $suppressQuestionIndicator
     * @return QueryRequest
     */
    public function setSuppressQuestionIndicator($suppressQuestionIndicator) {
        return $this->SuppressQuestionIndicator = $suppressQuestionIndicator;
    }
}
