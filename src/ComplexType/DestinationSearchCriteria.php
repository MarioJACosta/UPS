<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of DestinationSearchCriteria
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DestinationSearchCriteria extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'DestinationSearchCriteria';
    
    /**
     * @param string $searchRadius
     * @return DestinationSearchCriteria
     */
    public function setSearchRadius($searchRadius) {
        return $this->SearchRadius = $searchRadius;
    }
    
    /**
     * @param string $distanceUnitOfMeasure
     * @return DestinationSearchCriteria
     */
    public function setDistanceUnitOfMeasure($distanceUnitOfMeasure) {
        return $this->DistanceUnitOfMeasure = $distanceUnitOfMeasure;
    }
    
    /**
     * @param string $maximumLocation
     * @return DestinationSearchCriteria
     */
    public function setMaximumLocation($maximumLocation) {
        return $this->MaximumLocation = $maximumLocation;
    }
}
