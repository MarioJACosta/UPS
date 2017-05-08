<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ConfirmationNumber
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ConfirmationNumber extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'ConfirmationNumber';
    
    /**
     * @param Type $type
     * @return ConfirmationNumber
     */
    public function setType($type) {
        return $this->Type = $type;
    }
    
    /**
     * @param string $value
     * @return ConfirmationNumber
     */
    public function setValue($value) {
        return $this->Value = $value;
    }
}
