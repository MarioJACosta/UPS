<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Locale
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Locale extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Locale';
    
    /**
     * @param string $language
     * @return Locale
     */
    public function setLanguage($language) {
        return $this->Language = $language;
    }
    
    /**
     * @param string $dialect
     * @return Locale
     */
    public function setDialect($dialect) {
        return $this->Dialect = $dialect;
    }
}
