<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ReferenceNumber
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ReferenceNumber extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'ReferenceNumber';
    
    /**
     * @param string $barCodeIndicator
     * @return ReferenceNumber
     */
    public function setBarCodeIndicator($barCodeIndicator){
        return $this->BarCodeIndicator = $barCodeIndicator;
    }
    
    /**
     * @param string $code
     * @return ReferenceNumber
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $value
     * @return ReferenceNumber
     */
    public function setValue($value) {
        return $this->Value = $value;
    }
}
