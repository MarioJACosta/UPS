<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of AlternateDeliveryAddress
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AlternateDeliveryAddress extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'AlternateDeliveryAddress';
    
    /**
     * @param string $name
     * @return AlternateDeliveryAddress
     */
    public function setName($name) {
        return $this->Name = $name;
    }
    
    /**
     * @param Address $address
     * @return AlternateDeliveryAddress
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }
    
    /**
     * @param string $attentionName
     * @return AlternateDeliveryAddress
     */
    public function setAttentionName($attentionName) {
        return $this->AttentionName = $attentionName;
    }
    
    /**
     * @param string $UPSAccessPointID
     * @return AlternateDeliveryAddress
     */
    public function setUPSAccessPointID($UPSAccessPointID) {
        return $this->UPSAccessPointID = $UPSAccessPointID;
    }
}
