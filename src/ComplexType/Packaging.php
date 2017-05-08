<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Packaging
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Packaging extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Packaging';
    
    /**
     * @param string $code
     * @return Packaging
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return Packaging
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
