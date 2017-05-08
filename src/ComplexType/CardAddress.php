<?php

namespace UPS\ComplexType;

/**
 * Description of CardAddress
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CardAddress {
   
    /**
     * @var string
     */
    protected $_name = 'CardAddress';
    
    /**
     * 
     * @param string $addressLine
     * @return CardAddress
     */
    public function setAddressLine($addressLine) {
        return $this->AddressLine = $addressLine;
    }
    
    /**
     * @param string $city
     * @return CardAddress
     */
    public function setCity($city) {
        return $this->City = $city;
    }
    
    /**
     * @param string $stateProvince
     * @return CardAddress
     */
    public function setStateProvince($stateProvince) {
        return $this->StateProvince = $stateProvince;
    }
    
    /**
     * @param string $postalCode
     * @return CardAddress
     */
    public function setPostalCode($postalCode) {
        return $this->PostalCode = $postalCode;
    }
    
    /**
     * @param string $countryCode
     * @return CardAddress
     */
    public function setCountryCode($countryCode) {
        return $this->CountryCode = $countryCode;
    }
}
