<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ImportControl
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ImportControl extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'ImportControl';
    
    /**
     * @param string $code
     * @return ImportControl
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return ImportControl
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
    
}
