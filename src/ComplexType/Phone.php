<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Phone
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Phone extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Phone';
    
    /**
     * @param string $number
     * @return Phone
     */
    public function setNumber($number) {
        return $this->Number = $number;
    }
    
    /**
     * @param sting $extension
     * @return Phone
     */
    public function setExtension($extension) {
        return $this->Extension = $extension;
    }
}
