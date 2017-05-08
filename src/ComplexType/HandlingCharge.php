<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of HandlingCharge
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HandlingCharge extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'HandlingCharge';
    
    /**
     * @param string $percentage
     * @return HandlingCharge
     */
    public function setPercentage($percentage) {
        return $this->Percentage = $percentage;
    }
    
    /**
     * @param Amount $amount
     * @return HandlingCharge
     */
    public function setAmount($amount) {
        return $this->Amount = $amount;
    }

}
