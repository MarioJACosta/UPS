<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipFrom
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipFrom extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipFrom';

    /**
     * 
     * @param type $attentionName
     * @return ShipFrom
     */
    public function setAttentionName($attentionName) {
        return $this->AttentionName = $attentionName;
    }

    /**
     * @param string $name
     * @return ShipFrom
     */
    public function setName($name) {
        return $this->Name = $name;
    }

    /**
     * @param Address $address
     * @return ShipFrom
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

    /**
     * @param Phone $phone
     * @return ShipFrom
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }

    /**
     * @param string $eMailAddress
     * @return ShipFrom
     */
    public function setEMailAddress($eMailAddress) {
        return $this->EMailAddress = $eMailAddress;
    }

    /**
     * @param string $taxIdentificationNumber
     * @return ShipFrom
     */
    public function setTaxIdentificationNumber($taxIdentificationNumber) {
        return $this->TaxIdentificationNumber = $taxIdentificationNumber;
    }

    /**
     * @param TaxIDType $taxIDType
     * @return ShipFrom
     */
    public function setTaxIDType($taxIDType) {
        return $this->TaxIDType = $taxIDType;
    }

    /**
     * @param string $faxNumber
     * @return ShipFrom
     */
    public function setFaxNumber($faxNumber) {
        return $this->FaxNumber = $faxNumber;
    }

    /**
     * @param string $phoneNumber
     * @return ShipFrom
     */
    public function setPhoneNumber($phoneNumber) {
        return $this->PhoneNumber = $phoneNumber;
    }

    /**
     * @param string $phoneExtension
     * @return ShipFrom
     */
    public function setPhoneExtension($phoneExtension) {
        return $this->PhoneExtension = $phoneExtension;
    }

}
