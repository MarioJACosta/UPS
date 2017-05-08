<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupDateInfo
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupDateInfo extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'PickupDateInfo';

    /**
     * @param string $closeTime
     * @return PickupDateInfo
     */
    public function setCloseTime($closeTime) {
        return $this->CloseTime = $closeTime;
    }

    /**
     * @param string $readyTime
     * @return PickupDateInfo
     */
    public function setReadyTime($readyTime) {
        return $this->ReadyTime = $readyTime;
    }

    /**
     * @param string $pickupDate
     * @return PickupDateInfo
     */
    public function setPickupDate($pickupDate) {
        return $this->PickupDate = $pickupDate;
    }

}
