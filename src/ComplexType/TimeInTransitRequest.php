<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of TimeInTransitRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TimeInTransitRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TimeInTransitRequest';

    /**
     * @param Request $request
     * @return TimeInTransitRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }

    /**
     * @param ShipFrom $shipFrom
     * @return TimeInTransitRequest
     */
    public function setShipFrom($shipFrom) {
        return $this->ShipFrom = $shipFrom;
    }

    /**
     * @param ShipTo $shipTo
     * @return TimeInTransitRequest
     */
    public function setShipTo($shipTo) {
        return $this->ShipTo = $shipTo;
    }

    /**
     * @param Pickup $pickup
     * @return TimeInTransitRequest
     */
    public function setPickup($pickup) {
        return $this->Pickup = $pickup;
    }

    /**
     * @param ShipmentWeight $shipmentWeight
     * @return TimeInTransitRequest
     */
    public function setShipmentWeight($shipmentWeight) {
        return $this->ShipmentWeight = $shipmentWeight;
    }

    /**
     * @param string $totalPackagesInShipment
     * @return TimeInTransitRequest
     */
    public function setTotalPackagesInShipment($totalPackagesInShipment) {
        return $this->TotalPackagesInShipment = $totalPackagesInShipment;
    }

    /**
     * @param InvoiceLineTotal $invoiceLineTotal
     * @return TimeInTransitRequest
     */
    public function setInvoiceLineTotal($invoiceLineTotal) {
        return $this->InvoiceLineTotal = $invoiceLineTotal;
    }

    /**
     * @param string $documentsOnlyIndicator
     * @return TimeInTransitRequest
     */
    public function setDocumentsOnlyIndicator($documentsOnlyIndicator) {
        return $this->DocumentsOnlyIndicator = $documentsOnlyIndicator;
    }

    /**
     * @param string $billType
     * @return TimeInTransitRequest
     */
    public function setBillType($billType) {
        return $this->BillType = $billType;
    }

    /**
     * @param string $maximumListSize
     * @return TimeInTransitRequest
     */
    public function setMaximumListSize($maximumListSize) {
        return $this->MaximumListSize = $maximumListSize;
    }
    
    /**
     * @param string $saturdayDeliveryInfoRequestIndicator
     * @return TimeInTransitRequest
     */
    public function setSaturdayDeliveryInfoRequestIndicator($saturdayDeliveryInfoRequestIndicator) {
        return $this->SaturdayDeliveryInfoRequestIndicator = $saturdayDeliveryInfoRequestIndicator;
    }
    
    /**
     * @param string $dropOffAtFacilityIndicator
     * @return TimeInTransitRequest
     */
    public function setDropOffAtFacilityIndicator($dropOffAtFacilityIndicator) {
        return $this->DropOffAtFacilityIndicator = $dropOffAtFacilityIndicator;
    }
    
    /**
     * @param string $holdForPickupIndicator
     * @return TimeInTransitRequest
     */
    public function setHoldForPickupIndicator($holdForPickupIndicator) {
        return $this->HoldForPickupIndicator = $holdForPickupIndicator;
    }

}
