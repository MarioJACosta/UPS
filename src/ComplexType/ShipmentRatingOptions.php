<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;
/**
 * Description of ShipmentRatingOptions
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentRatingOptions extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'ShipmentRatingOptions';
    
    /**
     * @param string $negotiatedRatesIndicator
     * @return ShipmentRatingOptions
     */
    public function setNegotiatedRatesIndicator($negotiatedRatesIndicator) {
        return $this->NegotiatedRatesIndicator = $negotiatedRatesIndicator;
    }
    
    /**
     * @param string $FRSShipmentIndicator
     * @return ShipmentRatingOptions
     */
    public function setFRSShipmentIndicator($FRSShipmentIndicator) {
        return $this->FRSShipmentIndicator = $FRSShipmentIndicator;
    }
    
    /**
     * 
     * @param string $rateChartIndicator
     * @return ShipmentRatingOptions
     */
    public function setRateChartIndicator($rateChartIndicator) {
        return $this->RateChartIndicator = $rateChartIndicator;
    }
}
