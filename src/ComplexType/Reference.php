<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Reference
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Reference extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Reference';
    
    /**
     * @param Number $number
     * @return Reference
     */
    public function setNumber ($number) {
        return $this->Number = $number;
    }
    
    /**
     * @param string $barCodeIndicator
     * @return Reference
     */
    public function setBarCodeIndicator($barCodeIndicator) {
        return $this->BarCodeIndicator = $barCodeIndicator;
    }
    
    /**
     * @param string $numberOfCartons
     * @return Reference
     */
    public function setNumberOfCartons($numberOfCartons) {
        return $this->NumberOfCartons = $numberOfCartons;
    }
    
    /**
     * @param Weight $weight
     * @return Reference
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }
    
    /**
     * @param string $label
     * @return Reference
     */
    public function setLabel($label) {
        return $this->Label = $label;
    }
    
    /**
     * @param string $value
     * @return Reference
     */
    public function setValue($value) {
        return $this->Value = $value;
    }
}
