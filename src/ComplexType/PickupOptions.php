<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupOptions
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupOptions extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PickupOptions';

    /**
     * @param string $liftGateAtPickupIndicator
     * @return PickupOptions
     */
    public function setLiftGateAtPickupIndicator($liftGateAtPickupIndicator) {
        return $this->LiftGateAtPickupIndicator = $liftGateAtPickupIndicator;
    }

    /**
     * @param string $holdForPickupIndicator
     * @return PickupOptions
     */
    public function setHoldForPickupIndicator($holdForPickupIndicator) {
        return $this->HoldForPickupIndicator = $holdForPickupIndicator;
    }

    /**
     * @param string $holidayPickupIndicator
     * @return PickupOptions
     */
    public function setHolidayPickupIndicator($holidayPickupIndicator) {
        return $this->HolidayPickupIndicator = $holidayPickupIndicator;
    }

    /**
     * @param string $insidePickupIndicator
     * @return PickupOptions
     */
    public function setInsidePickupIndicator($insidePickupIndicator) {
        return $this->InsidePickupIndicator = $insidePickupIndicator;
    }

    /**
     * @param string $residentialPickupIndicator
     * @return PickupOptions
     */
    public function setResidentialPickupIndicator($residentialPickupIndicator) {
        return $this->residentialPickupIndicator = $residentialPickupIndicator;
    }

    /**
     * @param string $weekendPickupIndicator
     * @return PickupOptions
     */
    public function setWeekendPickupIndicator($weekendPickupIndicator) {
        return $this->weekendPickupIndicator = $weekendPickupIndicator;
    }

    /**
     * @param string $liftGateRequiredIndicator
     * @return PickupOptions
     */
    public function setLiftGateRequiredIndicator($liftGateRequiredIndicator) {
        return$this->liftGateRequiredIndicator = $liftGateRequiredIndicator;
    }

}
