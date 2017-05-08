<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Shipper
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Shipper extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Shipper';
    
    /**
     * @param string $account
     * @return Shipper
     */
    public function setAccount($account) {
        return $this->Account = $account;
    }
    
    /**
     * @param ChargeCard $chargeCard
     * @return Shipper
     */
    public function setChargeCard($chargeCard) {
        return $this->ChargeCard = $chargeCard;
    }
    
    /**
     * @param string $name
     * @return Shipper
     */
    public function setName($name) {
        return $this->Name = $name;
    }
    
    /**
     * @param string $shipperNumber
     * @return Shipper
     */
    public function setShipperNumber($shipperNumber) {
        return $this->ShipperNumber = $shipperNumber;
    }
    
    /**
     * @param Address $address
     * @return Shipper
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }
    
    /**
     * @param string $attentionName
     * @return Shipper
     */
    public function setAttentionName($attentionName) {
        return $this->AttentionName = $attentionName;
    }
    
    /**
     * @param string $companyDisplayableName
     * @return Shipper
     */
    public function setCompanyDisplayableName($companyDisplayableName) {
        return $this->CompanyDisplayableName = $companyDisplayableName;
    }
    
    /**
     * @param string $taxIdentificationNumber
     * @return Shipper
     */
    public function setTaxIdentificationNumber($taxIdentificationNumber) {
        return $this->TaxIdentificationNumber = $taxIdentificationNumber;
    }
    
    /**
     * @param Phone $phone
     * @return Shipper
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }
    
    /**
     * @param string $faxNumber
     * @return Shipper
     */
    public function setFaxNumber($faxNumber) {
        return $this->FaxNumber = $faxNumber;
    }
    
    /**
     * @param string $eMailAddress
     * @return Shipper
     */
    public function setEMailAddress($eMailAddress) {
        return $this->EMailAddress = $eMailAddress;
    }
}
