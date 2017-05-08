<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Dimensions
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Dimensions extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Dimensions';
    
    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return Dimensions
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }
    
    /**
     * @param string $length
     * @return Dimensions
     */
    public function setLength($length) {
        return $this->Length = $length;
    }
    
    /**
     * @param string $width
     * @return Dimensions
     */
    public function setWidth($width) {
        return $this->Width = $width;
    }
    
    /**
     * @param string $height
     * @return Dimensions
     */
    public function setHeight($height) {
        return $this->Height = $height;
    }
    
    /**
     * @param string $volume
     * @return Dimensions
     */
    public function setVolume($volume) {
        return $this->Volume = $volume;
    }
}
