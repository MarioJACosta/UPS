<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of UPSPremiumCareForm
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UPSPremiumCareForm extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'UPSPremiumCareForm';
    
    /** 
     * @param string $shipmentDate
     * @return UPSPremiumCareForm
     */
    public function setShipmentDate($shipmentDate) {
        return $this->ShipmentDate = $shipmentDate;
    }
    
    /**
     * @param string $pageSize
     * @return UPSPremiumCareForm
     */
    public function setPageSize($pageSize) {
        return $this->PageSize = $pageSize;
    }
    
    /**
     * @param string $printType
     * @return UPSPremiumCareForm
     */
    public function setPrintType($printType) {
        return $this->PrintType = $printType;
    }
    
    /**
     * @param string $numOfCopies
     * @return UPSPremiumCareForm
     */
    public function setNumOfCopies($numOfCopies) {
        return $this->NumOfCopies = $numOfCopies;
    }
    
    /**
     * @param LanguageForUPSPremiumCare $languageForUPSPremiumCare
     * @return UPSPremiumCareForm
     */
    public function setLanguageForUPSPremiumCare($languageForUPSPremiumCare) {
        return $this->LanguageForUPSPremiumCare = $languageForUPSPremiumCare;
    }
}
