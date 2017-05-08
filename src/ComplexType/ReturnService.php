<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ReturnService
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ReturnService extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ReturnService';

    /**
     * @param string $code
     * @return ReturnService
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

    /**
     * @param string $description
     * @return ReturnService
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

}
