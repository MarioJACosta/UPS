<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of EEIInformation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EEIInformation extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'EEIInformation';
    
    /**
     * @param string $exportInformation
     * @return EEIInformation
     */
    public function setExportInformation($exportInformation) {
        return $this->ExportInformation = $exportInformation;
    }
    
    /**
     * @param License $license
     * @return EEIInformation
     */
    public function setLicense($license) {
        return $this->License = $license;
    }
    
    /**
     * @param DDTCInformation $DDTCInformation
     * @return EEIInformation
     */
    public function setDDTCInformation($DDTCInformation) {
        return $this->DDTCInformation = $DDTCInformation;
    }
}
