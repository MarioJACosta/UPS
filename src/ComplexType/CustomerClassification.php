<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of CustomerClassification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomerClassification extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'CustomerClassification';
    
    /**
     * @param string $code
     * @return CustomerClassification
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return CustomerClassification
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
