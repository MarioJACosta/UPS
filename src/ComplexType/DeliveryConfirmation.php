<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of DeliveryConfirmation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeliveryConfirmation extends AbstractComplexType{
    
    /**
     * @var DeliveryConfirmation 
     */
    protected $_name = 'DeliveryConfirmation';
    
    /**
     * @param string $DCISType
     * @return DeliveryConfirmation
     */
    public function setDCISType($DCISType) {
        return $this->DCISType = $DCISType;
    }
    
    /**
     * @param string $DCISNumber
     * @return DeliveryConfirmation
     */
    public function setDCISNumber($DCISNumber) {
        return $this->DCISNumber = $DCISNumber;
    }
}
