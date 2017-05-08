<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of EstimateRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EstimateRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'EstimateRequest';

    /**
     * @param Product $shipment
     * @return EstimateRequest
     */
    public function setShipment($shipment) {
        return $this->Shipment = $shipment;
    }
    
    /**
     * @param string $transactionDigest
     * @return EstimateRequest
     */
    public function setTransactionDigest($transactionDigest) {
        return $this->TransactionDigest = $transactionDigest;
    }

}
