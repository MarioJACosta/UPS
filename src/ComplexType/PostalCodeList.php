<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PostalCodeList
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PostalCodeList extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PostalCodeList';
    
    /**
     * @param PostalCode $postalCode
     * @return PostalCodeList
     */
    public function setPostalCode($postalCode) {
        return $this->PostalCode = $postalCode;
    }

}
