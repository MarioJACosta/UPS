<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of LanguageForUPSPremiumCare
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LanguageForUPSPremiumCare extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'LanguageForUPSPremiumCare';
    
    /** 
     * @param string $language
     * @return LanguageForUPSPremiumCare
     */
    public function setLanguage($language) {
        return $this->Language = $language;
    }
}
