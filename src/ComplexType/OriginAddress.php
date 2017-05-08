<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of OriginAddress
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class OriginAddress extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'OriginAddress';

    /**
     * @param string $streetAddress
     * @return OriginAddress
     */
    public function setStreetAddress($streetAddress) {
        return $this->StreetAddress = $streetAddress;
    }

    /**
     * @param string $city
     * @return OriginAddress
     */
    public function setCity($city) {
        return $this->City = $city;
    }

    /**
     * @param string $stateProvince
     * @return OriginAddress
     */
    public function setStateProvince($stateProvince) {
        return $this->StateProvince = $stateProvince;
    }

    /**
     * @param string $postalCode
     * @return OriginAddress
     */
    public function setPostalCode($postalCode) {
        return $this->PostalCode = $postalCode;
    }

    /**
     * @param string $countryCode
     * @return OriginAddress
     */
    public function setCountryCode($countryCode) {
        return $this->CountryCode = $countryCode;
    }
    
    /**
     * @param OriginSearchCriteria $originSearchCriteria
     * @return OriginAddress
     */
    public function setOriginSearchCriteria($originSearchCriteria) {
        return $this->OriginSearchCriteria = $originSearchCriteria;
    }
    
    /**
     * @param Geocode $geocode
     * @return OriginAddress
     */
    public function setGeocode($geocode) {
        return $this->Geocode = $geocode;
    }
    
    /**
     * @param AddressKeyFormat $addressKeyFormat
     * @return OriginAddress
     */
    public function setAddressKeyFormat($addressKeyFormat) {
        return $this->AddressKeyFormat = $addressKeyFormat;
    }
    
    /**
     * @param string $maximumListSize
     * @return OriginAddress
     */
    public function setMaximumListSize($maximumListSize) {
        return $this->MaximumListSize = $maximumListSize;
    }
}
