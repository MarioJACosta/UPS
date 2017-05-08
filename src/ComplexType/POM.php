<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of POM
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class POM extends AbstractComplexType {
    
    /**
     * @var string
     */
    protected $_name = 'POM';
    
    /**
     * @param string $pOMNumber
     * @return POM
     */
    public function setPOMNumber($pOMNumber) {
        return $this->POMNumber = $pOMNumber;
    }
    
    /**
     * @param string $pOMNumberType
     * @return POM
     */
    public function setPOMNumberType($pOMNumberType) {
        return $this->POMNumberType = $pOMNumberType;
    }
    
    /**
     * @param PickupNotifications $pickupNotifications
     * @return POM
     */
    public function setPickupNotifications($pickupNotifications) {
        return $this->PickupNotifications = $pickupNotifications;
    }

}
