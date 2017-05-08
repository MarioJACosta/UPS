<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PrintSize
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PrintSize extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PrintSize';

    /**
     * @param string $length
     * @return PrintSize
     */
    public function setLength($length) {
        return $this->Length = $length;
    }

    /**
     * @param string $width
     * @return PrintSize
     */
    public function setWidth($width) {
        return $this->Width = $width;
    }

}
