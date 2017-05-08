<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Address
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Address extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Address';

    /**
     * @param string $addressLine
     * @return Address
     */
    public function setAddressLine($addressLine) {
        return $this->AddressLine = $addressLine;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity($city) {
        return $this->City = $city;
    }

    /**
     * @param string $stateProvinceCode
     * @return Address
     */
    public function setStateProvinceCode($stateProvinceCode) {
        return $this->StateProvinceCode = $stateProvinceCode;
    }

    /**
     * @param string $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode) {
        return $this->PostalCode = $postalCode;
    }

    /**
     * @param string $countryCode
     * @return Address
     */
    public function setCountryCode($countryCode) {
        return $this->CountryCode = $countryCode;
    }

    /**
     * @param string $residentialAddressIndicator
     * @return Address
     */
    public function setResidentialAddressIndicator($residentialAddressIndicator) {
        return $this->ResidentialAddressIndicator = $residentialAddressIndicator;
    }

    /**
     * @param string $pOBoxIndicator
     * @return Address
     */
    public function setPOBoxIndicator($pOBoxIndicator) {
        return $this->POBoxIndicator = $pOBoxIndicator;
    }

    /**
     * @param string $town
     * @return Address
     */
    public function setTown($town) {
        return $this->Town = $town;
    }
    
    /**
     * @param string $state
     * @return Address
     */
    public function setState($state) {
        return $this->State = $state;
    }

    /**
     * @param string $county
     * @return Address
     */
    public function setCounty($county) {
        return $this->County = $county;
    }
}
