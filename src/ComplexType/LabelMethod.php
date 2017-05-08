<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of LabelMethod
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LabelMethod extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'LabelMethod';
    
    /**
     * @param string $code
     * @return LabelMethod
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return LabelMethod
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
