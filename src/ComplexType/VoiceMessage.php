<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of VoiceMessage
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class VoiceMessage extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'VoiceMessage';
    
    /**
     * @param string $phoneNumber
     * @return VoiceMessage
     */
    public function setPhoneNumber($phoneNumber) {
        return $this->PhoneNumber = $phoneNumber;
    }
    
}
