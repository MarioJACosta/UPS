<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of DryIce
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DryIce extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DryIce';

    /**
     * @param string $regulationSet
     * @return DryIce
     */
    public function setRegulationSet($regulationSet) {
        return $this->RegulationSet = $regulationSet;
    }

    /**
     * @param DryIceWeight $dryIceWeight
     * @return DryIce
     */
    public function setDryIceWeight($dryIceWeight) {
        return $this->DryIceWeight = $dryIceWeight;
    }

    /**
     * @param string $medicalUseIndicator
     * @return DryIce
     */
    public function setMedicalUseIndicator($medicalUseIndicator) {
        return $this->MedicalUseIndicator = $medicalUseIndicator;
    }
    
    /**
     * @param string $auditRequired
     * @return DryIce
     */
    public function setAuditRequired($auditRequired) {
        return $this->AuditRequired = $auditRequired;
    }

}
