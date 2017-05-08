<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of FreightOptions
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightOptions extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'FreightOptions';

    /**
     * @param ShipmentServiceOptions $shipmentServiceOptions
     * @return FreightOptions
     */
    public function setShipmentServiceOptions($shipmentServiceOptions) {
        return $this->ShipmentServiceOptions = $shipmentServiceOptions;
    }

    /**
     * @param string $originServiceCenterCode
     * @return FreightOptions
     */
    public function setOriginServiceCenterCode($originServiceCenterCode) {
        return $this->OriginServiceCenterCode = $originServiceCenterCode;
    }
    
    /**
     * @param DestinationAddress $destinationAddress
     * @return FreightOptions
     */
    public function setDestinationAddress($destinationAddress) {
        return $this->DestinationAddress = $destinationAddress;
    }

    /**
     * @param ShipmentDetail $shipmentDetail
     * @return FreightOptions
     */
    public function setShipmentDetail($shipmentDetail) {
        return $this->ShipmentDetail = $shipmentDetail;
    }
}
