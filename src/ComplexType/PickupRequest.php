<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupRequest extends AbstractComplexType {
    
    /**
     * @var string
     */
    protected $_name = 'PickupRequest';
    
    /**
     * @param string $additionalComments
     * @return PickupRequest
     */
    public function setAdditionalComments($additionalComments) {
        return $this->AdditionalComments = $additionalComments;
    }
    
    /**
     * @param Requester $requester
     * @return PickupRequest
     */
    public function setRequester($requester) {
        return $this->Requester = $requester;
    }
    
    /**
     * @param string $pickupDate
     * @return PickupRequest
     */
    public function setPickupDate($pickupDate) {
        return $this->PickupDate = $pickupDate;
    }
    
    /**
     * @param string $earliestTimeReady
     * @return PickupRequest
     */
    public function setEarliestTimeReady($earliestTimeReady) {
        return $this->EarliestTimeReady = $earliestTimeReady;
    }
    
    /**
     * @param string $latestTimeReady
     * @return PickupRequest
     */
    public function setLatestTimeReady($latestTimeReady) {
        return $this->LatestTimeReady = $latestTimeReady;
    }
    
    /**
     * @param POM $POM
     * @return PickupRequest
     */
    public function setPOM($POM) {
        return $this->POM = $POM;
    }
}
