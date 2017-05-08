<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ServiceCode
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ServiceOptionCode extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ServiceOptionCode';

    /**
     * @param string $code
     * @return ServiceOptionCode
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

}
