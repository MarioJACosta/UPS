<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupAddress
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupAddress extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'PickupAddress';

    /**
     * @param string $companyName
     * @return PickupAddress
     */
    public function setCompanyName($companyName) {
        return $this->CompanyName = $companyName;
    }

    /**
     * @param string $contactName
     * @return PickupAddress
     */
    public function setContactName($contactName) {
        return $this->ContactName = $contactName;
    }

    /**
     * @param string $addressLine
     * @return PickupAddress
     */
    public function setAddressLine($addressLine) {
        return $this->AddressLine = $addressLine;
    }

    /**
     * @param string $room
     * @return PickupAddress
     */
    public function setRoom($room) {
        return $this->Room = $room;
    }

    /**
     * @param string $floor
     * @return PickupAddress
     */
    public function setFloor($floor) {
        return $this->Floor = $floor;
    }

    /**
     * @param string $city
     * @return PickupAddress
     */
    public function setCity($city) {
        return $this->City = $city;
    }

    /**
     * @param string $stateProvince
     * @return PickupAddress
     */
    public function setStateProvince($stateProvince) {
        return $this->StateProvince = $stateProvince;
    }

    /**
     * @param string $urbanization
     * @return PickupAddress
     */
    public function setUrbanization($urbanization) {
        return $this->Urbanization = $urbanization;
    }

    /**
     * @param string $postalCode
     * @return PickupAddress
     */
    public function setPostalCode($postalCode) {
        return $this->PostalCode = $postalCode;
    }

    /**
     * @param string $countryCode
     * @return PickupAddress
     */
    public function setCountryCode($countryCode) {
        return $this->CountryCode = $countryCode;
    }
    
    /**
     * @param string $residentialIndicator
     * @return PickupAddress
     */
    public function setResidentialIndicator($residentialIndicator) {
        return $this->ResidentialIndicator = $residentialIndicator;
    }
    
    /**
     * @param string $pickupPoint
     * @return PickupAddress
     */
    public function setPickupPoint($pickupPoint) {
        return $this->PickupPoint = $pickupPoint;
    }
    
    /**
     * @param Phone $phone
     * @return PickupAddress
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }

}
