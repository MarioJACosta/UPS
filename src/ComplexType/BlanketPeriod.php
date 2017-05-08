<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of BlanketPeriod
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class BlanketPeriod extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'BlanketPeriod';

    /**
     * @param string $beginDate
     * @return BlanketPeriod
     */
    public function setBeginDate($beginDate) {
        return $this->BeginDate = $beginDate;
    }

    /**
     * @param string $endDate
     * @return BlanketPeriod
     */
    public function setEndDate($endDate) {
        return $this->EndDate = $endDate;
    }

}
