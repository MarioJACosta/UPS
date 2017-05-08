<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of OptionCode
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class OptionCode extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'OptionCode';

    /**
     * @param string $code
     * @return OptionCode
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

}
