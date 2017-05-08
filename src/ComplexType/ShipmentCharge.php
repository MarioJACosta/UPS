<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipmentCharge
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentCharge extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'ShipmentCharge';
    
    /**
     * @param string $type
     * @return ShipmentCharge
     */
    public function setType($type) {
        return $this->Type = $type;
    }
    
    /**
     * @param BillShipper $billShipper
     * @return ShipmentCharge
     */
    public function setBillShipper($billShipper) {
        return $this->BillShipper = $billShipper;
    }
    
    /**
     * @param BillReceiver $billReceiver
     * @return ShipmentCharge
     */
    public function setBillReceiver($billReceiver) {
        return $this->BillReceiver = $billReceiver;
    }
    
    /**
     * @param BillThirdParty $billThirdParty
     * @return ShipmentCharge
     */
    public function setBillThirdParty($billThirdParty) {
        return $this->BillThirdParty = $billThirdParty;
    }
    
    /**
     * @param string $consigneeBilledIndicator
     * @return ShipmentCharge
     */
    public function setConsigneeBilledIndicator($consigneeBilledIndicator) {
        return $this->ConsigneeBilledIndicator = $consigneeBilledIndicator;
    }
}
