<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PalletInformation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PalletInformation extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'PalletInformation';
    
    /**
     * @param Dimensions $dimensions
     * @return PalletInformation
     */
    public function setDimensions($dimensions) {
        return $this->Dimensions = $dimensions;
    }
}
