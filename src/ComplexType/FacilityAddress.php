<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of FacilityAddress
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FacilityAddress extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'FacilityAddress';

    /**
     * @param string $SLIC
     * @return FacilityAddress
     */
    public function setSLIC($SLIC) {
        return $this->SLIC = $SLIC;
    }

    /**
     * @param string $addressLine
     * @return FacilityAddress
     */
    public function setAddressLine($addressLine) {
        return $this->AddressLine = $addressLine;
    }

    /**
     * @param string $city
     * @return FacilityAddress
     */
    public function setCity($city) {
        return $this->City = $city;
    }

    /**
     * @param string $postalCodePrimaryLow
     * @return FacilityAddress
     */
    public function setPostalCodePrimaryLow($postalCodePrimaryLow) {
        return $this->PostalCodePrimaryLow = $postalCodePrimaryLow;
    }

    /**
     * @param string $postalCodeExtendedLow
     * @return FacilityAddress
     */
    public function setPostalCodeExtendedLow($postalCodeExtendedLow) {
        return $this->PostalCodeExtendedLow = $postalCodeExtendedLow;
    }

    /**
     * @param string $state
     * @return FacilityAddress
     */
    public function setState($state) {
        return $this->State = $state;
    }

    /**
     * @param string $countryCode
     * @return FacilityAddress
     */
    public function setCountryCode($countryCode) {
        return $this->CountryCode = $countryCode;
    }

}
