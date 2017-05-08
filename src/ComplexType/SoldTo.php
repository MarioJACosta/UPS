<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of SoldTo
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SoldTo extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SoldTo';

    /**
     * @param string $name
     * @return SoldTo
     */
    public function setName($name) {
        return $this->Name = $name;
    }

    /**
     * @param string $attentionName
     * @return SoldTo
     */
    public function setAttentionName($attentionName) {
        return $this->AttentionName = $attentionName;
    }

    /**
     * @param string $taxIdentificationNumber
     * @return SoldTo
     */
    public function setTaxIdentificationNumber($taxIdentificationNumber) {
        return $this->TaxIdentificationNumber = $taxIdentificationNumber;
    }

    /**
     * @param Phone $phone
     * @return SoldTo
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }

    /**
     * @param string $option
     * @return SoldTo
     */
    public function setOption($option) {
        return $this->Option = $option;
    }

    /**
     * @param Address $address
     * @return SoldTo
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }
    
    /**
     * @param string $EMailAddress
     * @return SoldTo
     */
    public function setEMailAddress($EMailAddress) {
        return $this->EMailAddress = $EMailAddress;
    }

}
