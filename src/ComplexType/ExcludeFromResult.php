<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ExcludeFromResult
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExcludeFromResult extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ExcludeFromResult';
    
    /**
     * @param string $businessClassificationCode
     * @return ExcludeFromResult
     */
    public function setBusinessClassificationCode($businessClassificationCode) {
        return $this->BusinessClassificationCode = $businessClassificationCode;
    }
    
    /**
     * @param string $businessName
     * @return ExcludeFromResult
     */
    public function setBusinessName($businessName) {
        return $this->BusinessName = $businessName;
    }
    
    /**
     * @param string $radius
     * @return ExcludeFromResult
     */
    public function setRadius($radius) {
        return $this->Radius = $radius;
    }
    
    /**
     * @param PostalCodeList $postalCodeList
     * @return ExcludeFromResult
     */
    public function setPostalCodeList($postalCodeList) {
        return $this->PostalCodeList = $postalCodeList;
    }

}
