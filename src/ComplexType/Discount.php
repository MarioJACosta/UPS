<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Discount
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Discount extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Discount';
    
    /**
     * @param string $monetaryValue
     * @return Discount
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }
}
