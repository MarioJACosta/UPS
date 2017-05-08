<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of OriginSearchCriteria
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class OriginSearchCriteria extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'OriginSearchCriteria';
    
    /**
     * @param string $searchRadius
     * @return 
     */
    public function setSearchRadius($searchRadius) {
        return $this->SearchRadius = $searchRadius;
    }
    
    /**
     * @param string $distanceUnitOfMeasure
     * @return OriginSearchCriteria
     */
    public function setDistanceUnitOfMeasure($distanceUnitOfMeasure) {
        return $this->DistanceUnitOfMeasure = $distanceUnitOfMeasure;
    }
    
    /**
     * @param string $maximumLocation
     * @return OriginSearchCriteria
     */
    public function setMaximumLocation($maximumLocation) {
        return $this->MaximumLocation = $maximumLocation;
    }
}
