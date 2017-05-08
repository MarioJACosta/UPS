<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipmentBillingOption
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentBillingOption extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentBillingOption';
    
    /**
     * @param string $code
     * @return ShipmentBillingOption
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

    /**
     * @param string $description
     * @return ShipmentBillingOption
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
