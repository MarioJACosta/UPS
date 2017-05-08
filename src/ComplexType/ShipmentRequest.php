<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentRequest';

    /**
     * @param Request $request
     * @return ShipmentRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param Shipment $shipment
     * @return ShipmentRequest
     */
    public function setShipment($shipment) {
        return $this->Shipment = $shipment;
    }

    /**
     * @param LabelSpecification $labelSpecification
     * @return ShipmentRequest
     */
    public function setLabelSpecification($labelSpecification) {
        return $this->LabelSpecification = $labelSpecification;
    }
    
    /**
     * @param ReceiptSpecification $receiptSpecification
     * @return ShipmentRequest
     */
    public function setReceiptSpecification($receiptSpecification) {
        return $this->ReceiptSpecification = $receiptSpecification;
    }
}
