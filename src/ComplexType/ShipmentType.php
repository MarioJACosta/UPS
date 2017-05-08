<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipmentType
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentType extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentType';
    
    /**
     * @param string $code
     * @return ShipmentType
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

}
