<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of DateTimeRange
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DateTimeRange extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DateTimeRange';

    /**
     * @param string $beginDateTime
     * @return DateTimeRange
     */
    public function setBeginDateTime($beginDateTime) {
        return $this->BeginDateTime = $beginDateTime;
    }

    /**
     * @param string $endDateTime
     * @return DateTimeRange
     */
    public function setEndDateTime($endDateTime) {
        return $this->EndDateTime = $endDateTime;
    }

}
