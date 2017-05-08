<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of EMailNotification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EMailNotification extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'EMailNotification';
    
    /**
     * @param string $eMailAddress
     * @return EMailNotification
     */
    public function setEMailAddress($eMailAddress) {
        return $this->EMailAddress = $eMailAddress;
    }
    
    /**
     * @param string $eventType
     * @return EMailNotification
     */
    public function setEventType($eventType) {
        return $this->EventType = $eventType;
    }
}
