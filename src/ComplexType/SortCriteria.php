<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of SortCriteria
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SortCriteria extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SortCriteria';

    /**
     * @param string $sortType
     * @return SortCriteria
     */
    public function setSortType($sortType) {
        return $this->SortType = $sortType;
    }

}
