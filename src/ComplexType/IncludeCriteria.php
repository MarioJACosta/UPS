<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of IncludeCriteria
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class IncludeCriteria extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'IncludeCriteria';

    /**
     * @param MerchantAccountNumberList $merchantAccountNumberList
     * @return IncludeCriteria
     */
    public function setMerchantAccountNumberList($merchantAccountNumberList) {
        return $this->MerchantAccountNumberList = $merchantAccountNumberList;
    }
    
    /**
     * @param SearchFilter $searchFilter
     * @return IncludeCriteria
     */
    public function setSearchFilter($searchFilter) {
        return $this->SearchFilter = $searchFilter;
    }
    
    /**
     * @param ServiceOfferingList $serviceOfferingList
     * @return IncludeCriteria
     */
    public function setServiceOfferingList($serviceOfferingList) {
        return $this->ServiceOfferingList = $serviceOfferingList;
    }
}
