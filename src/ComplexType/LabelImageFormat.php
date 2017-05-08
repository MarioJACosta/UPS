<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of LabelImageFormat
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LabelImageFormat extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'LabelImageFormat';
    
    /**
     * @param string $code
     * @return LabelImageFormat
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return LabelImageFormat
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
