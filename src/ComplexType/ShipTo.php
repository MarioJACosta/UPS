<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipTo
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipTo extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipTo';

    /**
     * 
     * @param type $attentionName
     * @return ShipTo
     */
    public function setAttentionName($attentionName) {
        return $this->AttentionName = $attentionName;
    }

    /**
     * @param string $name
     * @return ShipTo
     */
    public function setName($name) {
        return $this->Name = $name;
    }

    /**
     * @param Address $address
     * @return ShipTo
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

    /**
     * @param Phone $phone
     * @return ShipTo
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }

    /**
     * @param string $eMailAddress
     * @return ShipTo
     */
    public function setEMailAddress($eMailAddress) {
        return $this->EMailAddress = $eMailAddress;
    }

    /**
     * @param string $taxIdentificationNumber
     * @return ShipTo
     */
    public function setTaxIdentificationNumber($taxIdentificationNumber) {
        return $this->TaxIdentificationNumber = $taxIdentificationNumber;
    }

    /**
     * @param string $faxNumber
     * @return ShipTo
     */
    public function setFaxNumber($faxNumber) {
        return $this->FaxNumber = $faxNumber;
    }

    /**
     * @param string $locationID
     * @return ShipTo
     */
    public function setLocationID($locationID) {
        return $this->LocationID = $locationID;
    }

    /**
     * @param string $phoneNumber
     * @return ShipTo
     */
    public function setPhoneNumber($phoneNumber) {
        return $this->PhoneNumber = $phoneNumber;
    }

    /**
     * @param string $phoneExtension
     * @return ShipTo
     */
    public function setPhoneExtension($phoneExtension) {
        return $this->PhoneExtension = $phoneExtension;
    }

}
