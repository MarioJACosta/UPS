<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Number
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Number extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Number';

    /**
     * @param string $code
     * @return Number
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $value
     * @return Number
     */
    public function setValue($value) {
        return $this->Value = $value;
    }
}
