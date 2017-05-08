<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ExportLicenseDetectionRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExportLicenseDetectionRequest extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'ExportLicenseDetectionRequest';
    
    /**
     * @param Request $request
     * @return ExportLicenseDetectionRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param string $shipToCountryCode
     * @return ExportLicenseDetectionRequest
     */
    public function setShipToCountryCode($shipToCountryCode) {
        return $this->ShipToCountryCode = $shipToCountryCode;
    }
    
    /**
     * @param Product $product
     * @return ExportLicenseDetectionRequest
     */
    public function setProduct($product) {
        return $this->Product = $product;
    }
    
    /**
     * @param string $transactionReferenceID
     * @return ExportLicenseDetectionRequest
     */
    public function setTransactionReferenceID($transactionReferenceID) {
        return $this->TransactionReferenceID = $transactionReferenceID;
    }
}
