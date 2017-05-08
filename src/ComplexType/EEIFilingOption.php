<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of EEIFilingOption
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EEIFilingOption extends AbstractComplexType {
    
    /**
     * @var string
     */
    protected $_name = 'EEIFilingOption';
    
    /**
     * @param string $code
     * @return EEIFilingOption
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $EMailAddress
     * @return EEIFilingOption
     */
    public function setEMailAddress($EMailAddress) {
        return $this->EMailAddress = $EMailAddress;
    }
    
    /**
     * @param string $description
     * @return EEIFilingOption
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
    
    /**
     * @param UPSFiled $UPSFiled
     * @return EEIFilingOption
     */
    public function setUPSFiled($UPSFiled) {
        return $this->UPSFiled = $UPSFiled;
    }
    
    /**
     * @param ShipperFiled $shipperFiled
     * @return EEIFilingOption
     */
    public function setShipperFiled($shipperFiled) {
        return $this->ShipperFiled = $shipperFiled;
    }

}
