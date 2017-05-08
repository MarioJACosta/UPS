<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of EMailInformation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EMailInformation extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'EMailInformation';
    
    /** 
     * @param EMailType $EMailType
     * @return EMailInformation
     */
    public function setEMailType($EMailType) {
        return $this->EMailType = $EMailType;
    }
    
    /**
     * @param EMail $EMail
     * @return EMailInformation
     */
    public function setEMail($EMail) {
        return $this->EMail = $EMail;
    }
}
