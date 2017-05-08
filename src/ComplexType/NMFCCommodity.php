<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of $NMFCCommodity
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class NMFCCommodity extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'NMFCCommodity';
    
    /**
     * @param string $primeCode
     * @return NMFCCommodity
     */
    public function setPrimeCode($primeCode) {
        return $this->PrimeCode = $primeCode;
    }
    
    /**
     * @param string $subCode
     * @return NMFCCommodity
     */
    public function setSubCode($subCode) {
        return $this->SubCode = $subCode;
    }

}
