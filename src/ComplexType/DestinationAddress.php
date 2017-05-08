<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of DestinationAddress
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DestinationAddress extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'DestinationAddress';
    
    /**
     * @param string $city
     * @return DestinationAddress
     */
    public function setCity($city) {
        return $this->City = $city;
    }
    
    /**
     * @param string $stateProvince
     * @return DestinationAddress
     */
    public function setStateProvince($stateProvince) {
        return $this->StateProvince = $stateProvince;
    }
    
    /**
     * @param string $postalCode
     * @return DestinationAddress
     */
    public function setPostalCode($postalCode) {
        return $this->PostalCode = $postalCode;
    }
    
    /**
     * @param string $countryCode
     * @return DestinationAddress
     */
    public function setCountryCode($countryCode) {
        return $this->CountryCode = $countryCode;
    }
    
    /**
     * @param DestinationSearchCriteria $destinationSearchCriteria
     * @return DestinationAddress
     */
    public function setDestinationSearchCriteria($destinationSearchCriteria) {
        return $this->DestinationSearchCriteria = $destinationSearchCriteria;
    }
}
