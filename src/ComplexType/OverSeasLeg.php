<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of OverSeasLeg
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class OverSeasLeg extends AbstractComplexType {
    
    /**
     * @var string
     */
    protected $_name = 'OverSeasLeg';
    
    /**
     * @param Dimensions $dimensions
     * @return OverSeasLeg
     */
    public function setDimensions($dimensions) {
        return $this->Dimensions = $dimensions;
    }
    
    /**
     * @param Value $value
     * @return OverSeasLeg
     */
    public function setValue($value) {
        return $this->Value = $value;
    }
}
