<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of CODPaymentMethod
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CODPaymentMethod extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CODPaymentMethod';

    /**
     * 
     * @param string $code
     * @return CODPaymentMethod
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

    /**
     * @param string $description
     * @return CODPaymentMethod
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

}
