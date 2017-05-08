<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of OpenTimeCriteria
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class OpenTimeCriteria extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'OpenTimeCriteria';

    /**
     * @param string $dayOfWeekCode
     * @return OpenTimeCriteria
     */
    public function setDayOfWeekCode($dayOfWeekCode) {
        return $this->DayOfWeekCode = $dayOfWeekCode;
    }

    /**
     * @param string $fromTime
     * @return OpenTimeCriteria
     */
    public function setFromTime($fromTime) {
        return $this->FromTime = $fromTime;
    }

    /**
     * @param string $toTime
     * @return OpenTimeCriteria
     */
    public function setToTime($toTime) {
        return $this->ToTime = $toTime;
    }

}
