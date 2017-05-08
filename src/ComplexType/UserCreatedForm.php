<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of UserCreatedForm
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UserCreatedForm extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'UserCreatedForm';
    
    /**
     * @param string $documentID
     * @return UserCreatedForm
     */
    public function setDocumentID($documentID) {
        return $this->DocumentID = $documentID;
    }
    
    /**
     * @param UPSPremiumCareForm $UPSPremiumCareForm
     * @return UserCreatedForm
     */
    public function setUPSPremiumCareForm($UPSPremiumCareForm) {
        return $this->UPSPremiumCareForm = $UPSPremiumCareForm;
    }
    
    /**
     * @param string $userCreatedFormFileName
     * @return UserCreatedForm
     */
    public function setUserCreatedFormFileName($userCreatedFormFileName) {
        return $this->UserCreatedFormFileName = $userCreatedFormFileName;
    }
    
    /**
     * @param string $userCreatedFormFile
     * @return UserCreatedForm
     */
    public function setUserCreatedFormFile($userCreatedFormFile) {
        return $this->UserCreatedFormFile = $userCreatedFormFile;
    }
    
    /**
     * @param string $userCreatedFormFileFormat
     * @return UserCreatedForm
     */
    public function setUserCreatedFormFileFormat($userCreatedFormFileFormat) {
        return $this->UserCreatedFormFileFormat = $userCreatedFormFileFormat;
    }
    
    /**
     * 
     * @param string $userCreatedFormDocumentType
     * @return UserCreatedForm
     */
    public function setUserCreatedFormDocumentType($userCreatedFormDocumentType) {
        return $this->UserCreatedFormDocumentType = $userCreatedFormDocumentType;
    }
}
