<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Payer
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Payer extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Payer';

    /**
     * @param string $name
     * @return Payer
     */
    public function setName($name) {
        return $this->Name = $name;
    }

    /**
     * @param Address $address
     * @return Payer
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

    /**
     * @param string $shipperNumber
     * @return Payer
     */
    public function setShipperNumber($shipperNumber) {
        return $this->ShipperNumber = $shipperNumber;
    }

    /**
     * @param string $attentionName
     * @return Payer
     */
    public function setAttentionName($attentionName) {
        return $this->AttentionName = $attentionName;
    }

    /**
     * @param Phone $phone
     * @return Payer
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }

    /**
     * @param string $faxNumber
     * @return Payer
     */
    public function setFaxNumber($faxNumber) {
        return $this->FaxNumber = $faxNumber;
    }

    /**
     * @param string $EMailAddress
     * @return Payer
     */
    public function setEMailAddress($EMailAddress) {
        return $this->EMailAddress = $EMailAddress;
    }

}
