<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ServiceCode
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ServiceCode extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ServiceCode';

    /**
     * @param string $code
     * @return ServiceCode
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

}
