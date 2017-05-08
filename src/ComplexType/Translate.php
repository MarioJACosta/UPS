<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Translate
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Translate extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Translate';
    
    /**
     * @param string $languageCode
     * @return Translate
     */
    public function setLanguageCode($languageCode) {
        return $this->LanguageCode = $languageCode;
    }
    
    /**
     * @param string $dialectCode
     * @return Translate
     */
    public function setDialectCode($dialectCode) {
        return $this->DialectCode = $dialectCode;
    }
    
    /**
     * @param string $code
     * @return Translate
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $locale
     * @return Translate
     */
    public function setLocale($locale) {
        return $this->Locale = $locale;
    }
}
