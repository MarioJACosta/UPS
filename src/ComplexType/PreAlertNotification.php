<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PreAlertNotification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PreAlertNotification extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'PreAlertNotification';
    
    /**
     * @param EMailMessage $EMailMessage
     * @return PreAlertNotification
     */
    public function setEMailMessage($EMailMessage) {
        return $this->EMailMessage = $EMailMessage;
    }
    
    /**
     * @param VoiceMessage $voiceMessage
     * @return PreAlertNotification
     */
    public function setVoiceMessage($voiceMessage) {
        return $this->VoiceMessage = $voiceMessage;
    }
    
    /** 
     * @param TextMessage $textMessage
     * @return PreAlertNotification
     */
    public function setTextMessage($textMessage) {
        return $this->TextMessage = $textMessage;
    }
    
    /**
     * @param Locale $locale
     * @return PreAlertNotification
     */
    public function setLocale($locale) {
        return $this->Locale = $locale;
    }
}
