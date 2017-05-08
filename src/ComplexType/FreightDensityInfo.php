<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of FreightDensityInfo
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightDensityInfo extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'FreightDensityInfo';
    
    /**
     * @param string $adjustedHeightIndicator
     * @return FreightDensityInfo
     */
    public function setAdjustedHeightIndicator($adjustedHeightIndicator) {
        return $this->AdjustedHeightIndicator = $adjustedHeightIndicator;
    }
    
    /**
     * @param AdjustedHeight $adjustedHeight
     * @return FreightDensityInfo
     */
    public function setAdjustedHeight($adjustedHeight) {
        return $this->AdjustedHeight = $adjustedHeight;
    }
    
    /**
     * @param HandlingUnits $handlingUnits
     * @return FreightDensityInfo
     */
    public function setHandlingUnits($handlingUnits) {
        return $this->HandlingUnits = $handlingUnits;
    }
}
