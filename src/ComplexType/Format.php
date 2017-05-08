<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Format
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Format extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Format';

    /**
     * @param string $code
     * @return Format
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return Format
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

}
