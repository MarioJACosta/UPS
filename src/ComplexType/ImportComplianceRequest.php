<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ImportComplianceRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ImportComplianceRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ImportComplianceRequest';

    /**
     * @param Request $request
     * @return ImportComplianceRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }

    /**
     * @param string $destinationCountryCode
     * @return ImportComplianceRequest
     */
    public function setDestinationCountryCode($destinationCountryCode) {
        return $this->DestinationCountryCode = $destinationCountryCode;
    }

    /**
     * @param string $originCountryCode
     * @return ImportComplianceRequest
     */
    public function setOriginCountryCode($originCountryCode) {
        return $this->OriginCountryCode = $originCountryCode;
    }
    
    /**
     * @param Product $product
     * @return ImportComplianceRequest
     */
    public function setProduct($product) {
        return $this->Product = $product;
    }
    
    /**
     * @param string $transactionReferenceID
     * @return ImportComplianceRequest
     */
    public function setTransactionReferenceID($transactionReferenceID) {
        return $this->TransactionReferenceID = $transactionReferenceID;
    }
    
    /**
     * @param integer $tariffCodeAlert
     * @return ImportComplianceRequest
     */
    public function setTariffCodeAlert($tariffCodeAlert) {
        return $this->TariffCodeAlert = $tariffCodeAlert;
    }

}
