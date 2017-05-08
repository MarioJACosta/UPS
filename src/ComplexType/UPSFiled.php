<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of UPSFiled
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UPSFiled extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'UPSFiled';
    
    /**
     * 
     * @param POA $POA
     * @return UPSFiled
     */
    public function setPOA($POA) {
        return $this->POA = $POA;
    }
}
