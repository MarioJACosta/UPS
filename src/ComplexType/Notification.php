<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Notification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Notification extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Notification';

    /**
     * @param string $notificationCode
     * @return Notification
     */
    public function setNotificationCode($notificationCode) {
        return $this->NotificationCode = $notificationCode;
    }

    /**
     * @param EMail $eMail
     * @return Notification
     */
    public function setEMail($eMail) {
        return $this->EMail = $eMail;
    }

    /**
     * @param VoiceMessage $voiceMessage
     * @return Notification
     */
    public function setVoiceMessage($voiceMessage) {
        return $this->VoiceMessage = $voiceMessage;
    }

    /**
     * @param TextMessage $textMessage
     * @return Notification
     */
    public function setTextMessage($textMessage) {
        return $this->TextMessage = $textMessage;
    }

    /**
     * @param Locale $locale
     * @return Notification
     */
    public function setLocale($locale) {
        return $this->Locale = $locale;
    }

}
