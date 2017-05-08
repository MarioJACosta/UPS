<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of FreightCancelPickupRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightCancelPickupRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'FreightCancelPickupRequest';

    /**
     * @param Request $request
     * @return FreightCancelPickupRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param string $pickupRequestConfirmationNumber
     * @return FreightCancelPickupRequest
     */
    public function setPickupRequestConfirmationNumber($pickupRequestConfirmationNumber) {
        return $this->PickupRequestConfirmationNumber = $pickupRequestConfirmationNumber;
    }

}
