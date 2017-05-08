<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupDateRange
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupDateRange extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PickupDateRange';

    /**
     * @param string $beginDate
     * @return PickupDateRange
     */
    public function setBeginDate($beginDate) {
        return $this->BeginDate = $beginDate;
    }

    /**
     * @param string $endDate
     * @return PickupDateRange
     */
    public function setEndDate($endDate) {
        return $this->EndDate = $endDate;
    }

}
