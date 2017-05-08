<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Requester
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Requester extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'Requester';

    /**
     * @param string $thirdPartyIndicator
     * @return Requester
     */
    public function setThirdPartyIndicator($thirdPartyIndicator) {
        return $this->ThirdPartyIndicator = $thirdPartyIndicator;
    }

    /**
     * @param string $attentionName
     * @return Requester
     */
    public function setAttentionName($attentionName) {
        return $this->AttentionName = $attentionName;
    }

    /**
     * @param string $eMailAddress
     * @return Requester
     */
    public function setEMailAddress($eMailAddress) {
        return $this->EMailAddress = $eMailAddress;
    }

    /**
     * @param string $name
     * @return Requester
     */
    public function setName($name) {
        return $this->Name = $name;
    }

    /**
     * @param Phone $phone
     * @return Requester
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }

}
