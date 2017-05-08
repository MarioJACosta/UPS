<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of LocatorRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LocatorRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'LocatorRequest';

    /**
     * @param Request $request
     * @return LocatorRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }

    /**
     * @param OriginAddress $originAddress
     * @return LocatorRequest
     */
    public function setOriginAddress($originAddress) {
        return $this->OriginAddress = $originAddress;
    }

    /**
     * @param Translate $translate
     * @return LocatorRequest
     */
    public function setTranslate($translate) {
        return $this->Translate = $translate;
    }

    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return LocatorRequest
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }

    /**
     * @param string $locationID
     * @return LocatorRequest
     */
    public function setLocationID($locationID) {
        return $this->LocationID = $locationID;
    }

    /**
     * @param LocationSearchCriteria $locationSearchCriteria
     * @return LocatorRequest
     */
    public function setLocationSearchCriteria($locationSearchCriteria) {
        return $this->LocationSearchCriteria = $locationSearchCriteria;
    }
    
    /**
     * @param SortCriteria $sortCriteria
     * @return LocatorRequest
     */
    public function setSortCriteria($sortCriteria) {
        return $this->SortCriteria = $sortCriteria;
    }
    
    /**
     * @param string $allowAllConfidenceLevels
     * @return LocatorRequest
     */
    public function setAllowAllConfidenceLevels($allowAllConfidenceLevels) {
        return $this->AllowAllConfidenceLevels = $allowAllConfidenceLevels;
    }
    
    /**
     * @param string $searchOptionCode
     * @return LocatorRequest
     */
    public function setSearchOptionCode($searchOptionCode) {
        return $this->SearchOptionCode = $searchOptionCode;
    }
    
    /**
     * @param ServiceGeoUnit $serviceGeoUnit
     * @return LocatorRequest
     */
    public function setServiceGeoUnit($serviceGeoUnit) {
        return $this->ServiceGeoUnit = $serviceGeoUnit;
    }
    
    /**
     * @param string $freightIndicator
     * @return LocatorRequest
     */
    public function setFreightIndicator($freightIndicator) {
        return $this->FreightIndicator = $freightIndicator;
    }

}
