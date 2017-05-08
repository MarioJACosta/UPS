<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of DangerousGoods
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DangerousGoods extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'DangerousGoods';

    /**
     * @param string $name
     * @return DangerousGoods
     */
    public function setName($name) {
        return $this->Name = $name;
    }

    /**
     * @param Phone $phone
     * @return DangerousGoods
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }

}
