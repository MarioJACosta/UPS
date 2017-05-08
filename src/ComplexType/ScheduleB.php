<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ScheduleB
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ScheduleB extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ScheduleB';

    /**
     * @param string $number
     * @return ScheduleB
     */
    public function setNumber($number) {
        return $this->Number = $number;
    }

    /**
     * @param string $quantity
     * @return ScheduleB
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }

    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return ScheduleB
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }

}
