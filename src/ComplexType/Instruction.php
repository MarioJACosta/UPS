<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Instruction
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Instruction extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Instruction';
    
    /**
     * @param string $code
     * @return Instruction
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return Instruction
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
