<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PackagingType
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PackagingType extends AbstractComplexType{

    /**
     * @var string
     */
    protected $_name = 'PackagingType';
    
    /**
     * @param string $code
     * @return PackagingType
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return PackagingType
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
