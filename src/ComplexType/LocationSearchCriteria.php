<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of LocationSearchCriteria
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LocationSearchCriteria extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'LocationSearchCriteria';

    /**
     * @param SearchOption $searchOption
     * @return LocationSearchCriteria
     */
    public function setSearchOption($searchOption) {
        return $this->SearchOption = $searchOption;
    }

    /**
     * @param string $maximumListSize
     * @return LocationSearchCriteria
     */
    public function setMaximumListSize($maximumListSize) {
        return $this->MaximumListSize = $maximumListSize;
    }

    /**
     * @param string $searchRadius
     * @return LocationSearchCriteria
     */
    public function setSearchRadius($searchRadius) {
        return $this->SearchRadius = $searchRadius;
    }

    /**
     * @param ServiceSearch $serviceSearch
     * @return LocationSearchCriteria
     */
    public function setServiceSearch($serviceSearch) {
        return $this->ServiceSearch = $serviceSearch;
    }

    /**
     * @param FreightWillCallSearch $freightWillCallSearch
     * @return LocationSearchCriteria
     */
    public function setFreightWillCallSearch($freightWillCallSearch) {
        return $this->FreightWillCallSearch = $freightWillCallSearch;
    }
    
    /**
     * @param AccessPointSearch $accessPointSearch
     * @return LocationSearchCriteria
     */
    public function setAccessPointSearch($accessPointSearch) {
        return $this->AccessPointSearch = $accessPointSearch;
    }
    
    
    /**
     * @param OpenTimeCriteria $openTimeCriteria
     * @return LocationSearchCriteria
     */
    public function setOpenTimeCriteria($openTimeCriteria) {
        return $this->OpenTimeCriteria = $openTimeCriteria;
    }

}
