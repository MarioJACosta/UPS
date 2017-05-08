<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Relation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Relation extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Relation';

    /**
     * @param string $code
     * @return Relation
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

}
