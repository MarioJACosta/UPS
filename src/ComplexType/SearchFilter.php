<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of SearchFilter
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SearchFilter extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SearchFilter';
    
    /**
     * @param string $DCRIndicator
     * @return SearchFilter
     */
    public function setDCRIndicator($DCRIndicator) {
        return $this->DCRIndicator = $DCRIndicator;
    }
    
    /**
     * @param string $shippingAvailabilityIndicator
     * @return SearchFilter
     */
    public function setShippingAvailabilityIndicator($shippingAvailabilityIndicator) {
        return $this->ShippingAvailabilityIndicator = $shippingAvailabilityIndicator;
    }
    
    /**
     * @param string $shipperPreparationDelay
     * @return SearchFilter
     */
    public function setShipperPreparationDelay($shipperPreparationDelay) {
        return $this->ShipperPreparationDelay = $shipperPreparationDelay;
    }
    
    /**
     * @param string $clickAndCollectSortWithDistance
     * @return SearchFilter
     */
    public function setClickAndCollectSortWithDistance($clickAndCollectSortWithDistance) {
        return $this->ClickAndCollectSortWithDistance = $clickAndCollectSortWithDistance;
    }

}
