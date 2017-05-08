<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipperFiled
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipperFiled extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'ShipperFiled';
    
    /**
     * @param string $code
     * @return ShipperFiled
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**     
     * @param string $description
     * @return ShipperFiled
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
    
    /**
     * @param string $preDepartureITNNumber
     * @return ShipperFiled
     */
    public function setPreDepartureITNNumber($preDepartureITNNumber) {
        return $this->PreDepartureITNNumber = $preDepartureITNNumber;
    }
    
    /**
     * @param string $exemptionLegend
     * @return ShipperFiled
     */
    public function setExemptionLegend($exemptionLegend) {
        return $this->ExemptionLegend = $exemptionLegend;
    }
}
