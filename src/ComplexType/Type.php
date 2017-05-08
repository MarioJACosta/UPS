<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Type
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Type extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'Type';

    /**
     * @param string $code
     * @return Type
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

    /**
     * @param string $description
     * @return Type
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

}
