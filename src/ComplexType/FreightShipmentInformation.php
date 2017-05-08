<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of FreightShipmentInformation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightShipmentInformation extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'FreightShipmentInformation';
    
    /**
     * @param FreightDensityInfo $freightDensityInfo
     * @return FreightShipmentInformation
     */
    public function setFreightDensityInfo($freightDensityInfo) {
        return $this->FreightDensityInfo = $freightDensityInfo;
    }
    
    /**
     * @param string $densityEligibleIndicator
     * @return FreightShipmentInformation
     */
    public function setDensityEligibleIndicator($densityEligibleIndicator) {
        return $this->DensityEligibleIndicator = $densityEligibleIndicator;
    }
}
