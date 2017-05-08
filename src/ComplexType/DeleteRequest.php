<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of DeleteRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeleteRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeleteRequest';
    
    /**
     * @param Request $request
     * @return DeleteRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param string $shipperNumber
     * @return DeleteRequest
     */
    public function setShipperNumber($shipperNumber) {
        return $this->ShipperNumber = $shipperNumber;
    }
    
    /**
     * @param string $documentID
     * @return DeleteRequest
     */
    public function setDocumentID($documentID) {
        return $this->DocumentID = $documentID;
    }
}
