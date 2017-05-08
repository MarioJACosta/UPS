<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipConfirmRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipConfirmRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipConfirmRequest';

    /**
     * @param Request $request
     * @return ShipConfirmRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }

    /**
     * @param Shipment $shipment
     * @return ShipConfirmRequest
     */
    public function setShipment($shipment) {
        return $this->Shipment = $shipment;
    }

    /**
     * @param LabelSpecification $labelSpecification
     * @return ShipConfirmRequest
     */
    public function setLabelSpecification($labelSpecification) {
        return $this->LabelSpecification = $labelSpecification;
    }

    /**
     * @param ReceiptSpecification $receiptSpecification
     * @return ShipConfirmRequest
     */
    public function setReceiptSpecification($receiptSpecification) {
        return $this->ReceiptSpecification = $receiptSpecification;
    }

}
