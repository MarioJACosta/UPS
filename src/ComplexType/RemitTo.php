<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of RemitTo
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RemitTo extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'RemitTo';

    /**
     * @param string $name
     * @return RemitTo
     */
    public function setName($name) {
        return $this->Name = $name;
    }

    /**
     * @param Address $address
     * @return RemitTo
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

    /**
     * @param string $attentionName
     * @return RemitTo
     */
    public function setAttentionName($attentionName) {
        return $this->AttentionName = $attentionName;
    }

    /**
     * @param Phone $phone
     * @return RemitTo
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }

    /**
     * @param FaxNumber $faxNumber
     * @return RemitTo
     */
    public function setFaxNumber($faxNumber) {
        return $this->FaxNumber = $faxNumber;
    }

    /**
     * @param string $eMailAddress
     * @return RemitTo
     */
    public function setEMailAddress($eMailAddress) {
        return $this->EMailAddress = $eMailAddress;
    }

}
