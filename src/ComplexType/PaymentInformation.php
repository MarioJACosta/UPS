<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;
/**
 * Description of PaymentInformation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PaymentInformation extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'PaymentInformation';
    
    /**
     * @param ShipmentCharge $shipmentCharge
     * @return PaymentInformation
     */
    public function setShipmentCharge($shipmentCharge) {
        return $this->ShipmentCharge = $shipmentCharge;
    }
    
    /**
     * @param string $splitDutyVATIndicator
     * @return PaymentInformation
     */
    public function setSplitDutyVATIndicator($splitDutyVATIndicator) {
        return $this->SplitDutyVATIndicator = $splitDutyVATIndicator;
    }
    
    /**
     * @param Payer $payer
     * @return PaymentInformation
     */
    public function setPayer($payer) {
        return $this->Payer = $payer;
    }
    
    /**
     * @param ShipmentBillingOption $shipmentBillingOption
     * @return PaymentInformation
     */
    public function setShipmentBillingOption($shipmentBillingOption) {
        return $this->ShipmentBillingOption = $shipmentBillingOption;
    }
}
