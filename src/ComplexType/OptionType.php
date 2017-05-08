<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of OptionType
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class OptionType extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'OptionType';

    /**
     * @param string $code
     * @return OptionType
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

}
