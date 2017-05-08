<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of TextMessage
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TextMessage extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'TextMessage';
    
    /**
     * @param string $phoneNumber
     * @return TextMessage
     */
    public function setPhoneNumber($phoneNumber) {
        return $this->PhoneNumber = $phoneNumber;
    }
}
