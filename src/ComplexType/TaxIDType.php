<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of TaxIDType
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TaxIDType extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'TaxIDType';
    
    /**
     * @param string $code
     * @return TaxIDType
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return TaxIDType
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
