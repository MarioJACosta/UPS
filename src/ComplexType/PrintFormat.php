<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PrintFormat
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PrintFormat extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PrintFormat';

    /**
     * @param string $code
     * @return PrintFormat
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return PrintFormat
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

}
