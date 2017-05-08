<?php


namespace UPS\ComplexType;
use UPS\AbstractComplexType;
/**
 * Description of UploadRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadRequest extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'UploadRequest';
    
    /**
     * @param Request $request
     * @return UploadRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param string $shipperNumber
     * @return UploadRequest
     */
    public function setShipperNumber($shipperNumber) {
        return $this->ShipperNumber = $shipperNumber;
    }
    
    /**
     * @param UserCreatedForm $userCreatedForm
     * @return UploadRequest
     */
    public function setUserCreatedForm($userCreatedForm) {
        return $this->UserCreatedForm = $userCreatedForm;
    }
}
