<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of EMail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EMail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'EMail';

    /**
     * @param string $eMailAddress
     * @return EMail
     */
    public function setEMailAddress($eMailAddress) {
        return $this->EMailAddress = $eMailAddress;
    }

    /**
     * @param string $undeliverableEMailAddress
     * @return EMail
     */
    public function setUndeliverableEMailAddress($undeliverableEMailAddress) {
        return $this->UndeliverableEMailAddress = $undeliverableEMailAddress;
    }

    /**
     * @param string $fromEMailAddress
     * @return EMail
     */
    public function setFromEMailAddress($fromEMailAddress) {
        return $this->FromEMailAddress = $fromEMailAddress;
    }
    
    /**
     * @param string $fromName
     * @return EMail
     */
    public function setFromName($fromName) {
        return $this->FromName = $fromName;
    }
    
    /**
     * @param string $memo
     * @return EMail
     */
    public function setMemo($memo) {
        return $this->Memo = $memo;
    }
    
    /**
     * @param string $subject
     * @return EMail
     */
    public function setSubject($subject) {
        return $this->Subject = $subject;
    }
    
    /**
     * @param string $subjectCode
     * @return EMail
     */
    public function setSubjectCode($subjectCode) {
        return $this->SubjectCode = $subjectCode;
    }
    
    /**
     * @param EMailText $EMailText
     * @return EMail
     */
    public function setEMailText($EMailText) {
        return $this->EMailText = $EMailText;
    }
}
