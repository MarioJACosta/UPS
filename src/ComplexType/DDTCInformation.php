<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of DDTCInformation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DDTCInformation extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DDTCInformation';

    /**
     * @param string $ITARExemptionNumber
     * @return DDTCInformation
     */
    public function setITARExemptionNumber($ITARExemptionNumber) {
        return $this->ITARExemptionNumber = $ITARExemptionNumber;
    }

    /**
     * @param string $USMLCategoryCode
     * @return DDTCInformation
     */
    public function setUSMLCategoryCode($USMLCategoryCode) {
        return $this->USMLCategoryCode = $USMLCategoryCode;
    }

    /**
     * @param string $eligiblePartyIndicator
     * @return DDTCInformation
     */
    public function setEligiblePartyIndicator($eligiblePartyIndicator) {
        return $this->EligiblePartyIndicator = $eligiblePartyIndicator;
    }

    /**
     * @param string $registrationNumber
     * @return DDTCInformation
     */
    public function setRegistrationNumber($registrationNumber) {
        return $this->RegistrationNumber = $registrationNumber;
    }

    /**
     * @param string $quantity
     * @return DDTCInformation
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }

    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return DDTCInformation
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }
    
    /**
     * @param string $significantMilitaryEquipmentIndicator
     * @return DDTCInformation
     */
    public function setSignificantMilitaryEquipmentIndicator($significantMilitaryEquipmentIndicator) {
        return $this->SignificantMilitaryEquipmentIndicator = $significantMilitaryEquipmentIndicator;
    }
    
    /**
     * @param string $ACMNumber
     * @return DDTCInformation
     */
    public function setACMNumber($ACMNumber) {
        return $this->ACMNumber = $ACMNumber;
    }

}
