<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of DeliveryOptions
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeliveryOptions extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeliveryOptions';

    /**
     * @param string $liftGateAtDeliveryIndicator
     * @return DeliveryOptions
     */
    public function setLiftGateAtDeliveryIndicator($liftGateAtDeliveryIndicator) {
        return $this->LiftGateAtDeliveryIndicator = $liftGateAtDeliveryIndicator;
    }

    /**
     * @param string $dropOffAtUPSFacilityIndicator
     * @return DeliveryOptions
     */
    public function setDropOffAtUPSFacilityIndicator($dropOffAtUPSFacilityIndicator) {
        return $this->DropOffAtUPSFacilityIndicator = $dropOffAtUPSFacilityIndicator;
    }

    /**
     * @param string $holidayDeliveryIndicator
     * @return DeliveryOptions
     */
    public function setHolidayDeliveryIndicator($holidayDeliveryIndicator) {
        return $this->holidayDeliveryIndicator = $holidayDeliveryIndicator;
    }

    /**
     * @param string $insideDeliveryIndicator
     * @return DeliveryOptions
     */
    public function setInsideDeliveryIndicator($insideDeliveryIndicator) {
        return$this->insideDeliveryIndicator = $insideDeliveryIndicator;
    }

    /**
     * @param string $residentialDeliveryIndicator
     * @return DeliveryOptions
     */
    public function setResidentialDeliveryIndicator($residentialDeliveryIndicator) {
        return $this->residentialDeliveryIndicator = $residentialDeliveryIndicator;
    }

    /**
     * @param string $weekendDeliveryIndicator
     * @return DeliveryOptions
     */
    public function setWeekendDeliveryIndicator($weekendDeliveryIndicator) {
        return $this->weekendDeliveryIndicator = $weekendDeliveryIndicator;
    }

    /**
     * @param string $liftGateRequiredIndicator
     * @return DeliveryOptions
     */
    public function setLiftGateRequiredIndicator($liftGateRequiredIndicator) {
        return$this->liftGateRequiredIndicator = $liftGateRequiredIndicator;
    }

    /**
     * @param string $limitedAccessDeliveryIndicator
     * @return DeliveryOptions
     */
    public function setLimitedAccessDeliveryIndicator($limitedAccessDeliveryIndicator) {
        return $this->limitedAccessDeliveryIndicator = $limitedAccessDeliveryIndicator;
    }

}
