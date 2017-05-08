<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of UltimateConsignee
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class IntermediateConsignee extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'IntermediateConsignee';

    /**
     * @param string $companyName
     * @return IntermediateConsignee
     */
    public function setCompanyName($companyName) {
        return $this->CompanyName = $companyName;
    }
    
    /**
     * @param Address $address
     * @return IntermediateConsignee
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }
    
    /**
     * @param IntermediateConsigneeType $intermediateConsigneeType
     * @return IntermediateConsignee
     */
    public function setIntermediateConsigneeType($intermediateConsigneeType) {
        return $this->IntermediateConsigneeType = $intermediateConsigneeType;
    }

}
