<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Value
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Value extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Value';

    /**
     * @param Cube $cube
     * @return Value
     */
    public function setCube($cube) {
        return $this->Cube = $cube;
    }

    /**
     * @param CWT $CWT
     * @return Value
     */
    public function setCWT($CWT) {
        return $this->CWT = $CWT;
    }

    /**
     * @param COD $COD
     * @return Value
     */
    public function setCOD($COD) {
        return $this->COD = $COD;
    }

}
