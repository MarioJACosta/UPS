<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ContactInfo
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ContactInfo extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'ContactInfo';
    
    /**
     * @param string $name
     * @return ContactInfo
     */
    public function setName($name) {
        return $this->Name = $name;
    }
    
    /**
     * @param Phone $phone
     * @return ContactInfo
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }
}
