<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupPendingStatusRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupPendingStatusRequest extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'PickupPendingStatusRequest';
    
    /**
     * @param Request $request
     * @return PickupPendingStatusRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param string $pickupType
     * @return 
     */
    public function setPickupType($pickupType) {
        return $this->PickupType = $pickupType;
    }
    
    /**
     * @param string $accountNumber
     * @return PickupPendingStatusRequest
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }
}
