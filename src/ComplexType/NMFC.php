<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of NMFC
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class NMFC extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'NMFC';
    
    /**
     * @param string $primeCode
     * @return NMFC
     */
    public function setPrimeCode($primeCode) {
        return $this->PrimeCode = $primeCode;
    }
    
    /**
     * @param string $subCode
     * @return NMFC
     */
    public function setSubCode($subCode) {
        return $this->SubCode = $subCode;
    }
}
