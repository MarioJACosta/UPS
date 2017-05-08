<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of AddressKeyFormat
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AddressKeyFormat extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'AddressKeyFormat';

    /**
     * Name of business, company or person.
     * 
     * @param string $consigneeName
     * @return AddressKeyFormat
     */
    public function setConsigneeName($consigneeName) {
        return $this->ConsigneeName = $consigneeName;
    }

    /**
     * Name of the building.
     * 
     * @param string $attentionName
     * @return AddressKeyFormat
     */
    public function setAttentionName($attentionName) {
        return $this->AttentionName = $attentionName;
    }

    /**
     * Address line (street number, street name and street type) used for street level information.
     * 
     * @param string $addressLine
     * @return AddressKeyFormat
     */
    public function setAddressLine($addressLine) {
        return $this->AddressLine = $addressLine;
    }

    /**
     * @param string $region
     * @return AddressKeyFormat
     */
    public function setRegion($region) {
        return $this->Region = $region;
    }

    /**
     * City or Town name. 
     * 
     * @param string $politicalDivision2
     * @return AddressKeyFormat
     */
    public function setPoliticalDivision2($politicalDivision2) {
        return $this->PoliticalDivision2 = $politicalDivision2;
    }

    /**
     * State or Province/Territory name.
     * 
     * @param string $politicalDivision1
     * @return AddressKeyFormat
     */
    public function setPoliticalDivision1($politicalDivision1) {
        return $this->PoliticalDivision1 = $politicalDivision1;
    }

    /**
     * @param string $postcodePrimaryLow
     * @return AddressKeyFormat
     */
    public function setPostcodePrimaryLow($postcodePrimaryLow) {
        return $this->PostcodePrimaryLow = $postcodePrimaryLow;
    }

    /**
     * @param string $postcodeExtendedLow
     * @return AddressKeyFormat
     */
    public function setPostcodeExtendedLow($postcodeExtendedLow) {
        return $this->PostcodeExtendedLow = $postcodeExtendedLow;
    }

    /**
     * Puerto Rico Political Division 3. Only valid for Puerto Rico.
     * 
     * @param string $urbanization
     * @return AddressKeyFormat
     */
    public function setUrbanization($urbanization) {
        return $this->Urbanization = $urbanization;
    }

    /**
     * Country Code.
     * 
     * @param string $countryCode
     * @return AddressKeyFormat
     */
    public function setCountryCode($countryCode) {
        return $this->CountryCode = $countryCode;
    }

    /**
     * @param string $addressLine2
     * @return AddressKeyFormat
     */
    public function setAddressLine2($addressLine2) {
        return $this->AddressLine2 = $addressLine2;
    }

    /**
     * @param string $addressLine3
     * @return AddressKeyFormat
     */
    public function setAddressLine3($addressLine3) {
        return $this->AddressLine3 = $addressLine3;
    }

    /**
     * @param string $politicalDivision3
     * @return AddressKeyFormat
     */
    public function setPoliticalDivision3($politicalDivision3) {
        return $this->PoliticalDivision3 = $politicalDivision3;
    }
    
    /**
     * @param string $singleLineAddress
     * @return AddressKeyFormat
     */
    public function setSingleLineAddress($singleLineAddress) {
        return $this->SingleLineAddress = $singleLineAddress;
    }

}
