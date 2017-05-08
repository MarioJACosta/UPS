<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of CODBillingOption
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CODBillingOption extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CODBillingOption';

    /**
     * 
     * @param string $code
     * @return CODBillingOption
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

    /**
     * @param string $description
     * @return CODBillingOption
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

}
