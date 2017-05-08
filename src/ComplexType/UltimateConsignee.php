<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of UltimateConsignee
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UltimateConsignee extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'UltimateConsignee';

    /**
     * @param string $companyName
     * @return UltimateConsignee
     */
    public function setCompanyName($companyName) {
        return $this->CompanyName = $companyName;
    }
    
    /**
     * @param Address $address
     * @return UltimateConsignee
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }
    
    /**
     * @param UltimateConsigneeType $ultimateConsigneeType
     * @return UltimateConsignee
     */
    public function setUltimateConsigneeType($ultimateConsigneeType) {
        return $this->UltimateConsigneeType = $ultimateConsigneeType;
    }

}
