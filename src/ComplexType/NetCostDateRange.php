<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of NetCostDateRange
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class NetCostDateRange extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'NetCostDateRange';

    /**
     * @param string $beginDate
     * @return NetCostDateRange
     */
    public function setBeginDate($beginDate) {
        return $this->BeginDate = $beginDate;
    }

    /**
     * @param string $endDate
     * @return NetCostDateRange
     */
    public function setEndDate($endDate) {
        return $this->EndDate = $endDate;
    }

}
