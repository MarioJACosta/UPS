<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ServiceOffering
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ServiceOffering extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ServiceOffering';

    /**
     * @param string $code
     * @return ServiceOffering
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

}
