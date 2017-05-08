<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of VerbalConfirmation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class VerbalConfirmation extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'VerbalConfirmation';
    
    /**
     * @param ContactInfo $contactInfo
     * @return VerbalConfirmation
     */
    public function setContactInfo($contactInfo) {
        return $this->ContactInfo = $contactInfo;
    }
}
