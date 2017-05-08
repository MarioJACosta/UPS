<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupCancelRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupCancelRequest extends AbstractComplexType{
    
    /**
     * @var type 
     */
    protected $_name = 'PickupCancelRequest';
    
    /**
     * @param Request $request
     * @return PickupCancelRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param string $cancelBy
     * @return PickupCancelRequest
     */
    public function setCancelBy($cancelBy) {
        return $this->CancelBy = $cancelBy;
    }
    
    /**
     * @param string $prn
     * @return PickupCancelRequest
     */
    public function setPRN($prn) {
        return $this->PRN = $prn;
    }
}
