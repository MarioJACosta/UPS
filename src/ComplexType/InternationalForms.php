<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of InternationalForms
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class InternationalForms extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'InternationalForms';

    /**
     * @param string $formType
     * @return InternationalForms
     */
    public function setFormType($formType) {
        return $this->FormType = $formType;
    }

    /**
     * @param UserCreatedForm $userCreatedForm
     * @return InternationalForms
     */
    public function setUserCreatedForm($userCreatedForm) {
        return $this->UserCreatedForm = $userCreatedForm;
    }

    /**
     * @param CN22Form $CN22Form
     * @return InternationalForms
     */
    public function setCN22Form($CN22Form) {
        return $this->CN22Form = $CN22Form;
    }

    /**
     * @param string $additionalDocumentIndicator
     * @return InternationalForms
     */
    public function setAdditionalDocumentIndicator($additionalDocumentIndicator) {
        return $this->AdditionalDocumentIndicator = $additionalDocumentIndicator;
    }

    /**
     * @param string $formGroupIdName
     * @return InternationalForms
     */
    public function setFormGroupIdName($formGroupIdName) {
        return $this->FormGroupIdName = $formGroupIdName;
    }

    /**
     * @param EEIFilingOption $EEIFilingOption
     * @return InternationalForms
     */
    public function setEEIFilingOption($EEIFilingOption) {
        return $this->EEIFilingOption = $EEIFilingOption;
    }

    /**
     * @param Contacts $contacts
     * @return InternationalForms
     */
    public function setContacts($contacts) {
        return $this->Contacts = $contacts;
    }

    /**
     * @param Product $product
     * @return InternationalForms
     */
    public function setProduct($product) {
        return $this->Product = $product;
    }

    /**
     * @param string $invoiceNumber
     * @return InternationalForms
     */
    public function setInvoiceNumber($invoiceNumber) {
        return $this->InvoiceNumber = $invoiceNumber;
    }

    /**
     * @param string $invoiceDate
     * @return InternationalForms
     */
    public function setInvoiceDate($invoiceDate) {
        return $this->InvoiceDate = $invoiceDate;
    }

    /**
     * @param string $purchaseOrderNumber
     * @return InternationalForms
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber) {
        return $this->PurchaseOrderNumber = $purchaseOrderNumber;
    }

    /**
     * @param string $termsOfShipment
     * @return InternationalForms
     */
    public function setTermsOfShipment($termsOfShipment) {
        return $this->TermsOfShipment = $termsOfShipment;
    }

    /**
     * @param string $reasonForExport
     * @return InternationalForms
     */
    public function setReasonForExport($reasonForExport) {
        return $this->ReasonForExport = $reasonForExport;
    }

    /**
     * @param string $comments
     * @return InternationalForms
     */
    public function setComments($comments) {
        return $this->Comments = $comments;
    }

    /**
     * @param string $declarationStatement
     * @return InternationalForms
     */
    public function setDeclarationStatement($declarationStatement) {
        return $this->DeclarationStatement = $declarationStatement;
    }

    /**
     * @param Discount $discount
     * @return InternationalForms
     */
    public function setDiscount($discount) {
        return $this->Discount = $discount;
    }

    /**
     * @param string $freightCharges
     * @return InternationalForms
     */
    public function setFreightCharges($freightCharges) {
        return $this->FreightCharges = $freightCharges;
    }

    /**
     * @param InsuranceCharges $insuranceCharges
     * @return InternationalForms
     */
    public function setInsuranceCharges($insuranceCharges) {
        return $this->InsuranceCharges = $insuranceCharges;
    }

    /**
     * @param OtherCharges $otherCharges
     * @return InternationalForms
     */
    public function setOtherCharges($otherCharges) {
        return $this->OtherCharges = $otherCharges;
    }

    /**
     * @param string $currencyCode
     * @return InternationalForms
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }

    /**
     * @param BlanketPeriod $blanketPeriod
     * @return InternationalForms
     */
    public function setBlanketPeriod($blanketPeriod) {
        return $this->BlanketPeriod = $blanketPeriod;
    }

    /**
     * @param string $exportDate
     * @return InternationalForms
     */
    public function setExportDate($exportDate) {
        return $this->ExportDate = $exportDate;
    }

    /**
     * @param string $exportingCarrier
     * @return InternationalForms
     */
    public function setExportingCarrier($exportingCarrier) {
        return $this->ExportingCarrier = $exportingCarrier;
    }

    /**
     * @param string $carrierID
     * @return InternationalForms
     */
    public function setCarrierID($carrierID) {
        return $this->CarrierID = $carrierID;
    }

    /**
     * @param string $inBondCode
     * @return InternationalForms
     */
    public function setInBondCode($inBondCode) {
        return $this->InBondCode = $inBondCode;
    }

    /**
     * @param string $entryNumber
     * @return InternationalForms
     */
    public function setEntryNumber($entryNumber) {
        return $this->EntryNumber = $entryNumber;
    }

    /**
     * @param string $pointOfOrigin
     * @return InternationalForms
     */
    public function setPointOfOrigin($pointOfOrigin) {
        return $this->PointOfOrigin = $pointOfOrigin;
    }

    /**
     * @param string $pointOfOriginType
     * @return InternationalForms
     */
    public function setPointOfOriginType($pointOfOriginType) {
        return $this->PointOfOriginType = $pointOfOriginType;
    }

    /**
     * @param string $modeOfTransport
     * @return InternationalForms
     */
    public function setModeOfTransport($modeOfTransport) {
        return $this->ModeOfTransport = $modeOfTransport;
    }

    /**
     * @param string $portOfExport
     * @return InternationalForms
     */
    public function setPortOfExport($portOfExport) {
        return $this->PortOfExport = $portOfExport;
    }

    /**
     * @param string $portOfUnloading
     * @return InternationalForms
     */
    public function setPortOfUnloading($portOfUnloading) {
        return $this->PortOfUnloading = $portOfUnloading;
    }

    /**
     * @param string $loadingPier
     * @return InternationalForms
     */
    public function setLoadingPier($loadingPier) {
        return $this->LoadingPier = $loadingPier;
    }

    /**
     * @param string $partiesToTransaction
     * @return InternationalForms
     */
    public function setPartiesToTransaction($partiesToTransaction) {
        return $this->PartiesToTransaction = $partiesToTransaction;
    }

    /**
     * @param string $routedExportTransactionIndicator
     * @return InternationalForms
     */
    public function setRoutedExportTransactionIndicator($routedExportTransactionIndicator) {
        return $this->RoutedExportTransactionIndicator = $routedExportTransactionIndicator;
    }

    /**
     * @param string $containerizedIndicator
     * @return InternationalForms
     */
    public function setContainerizedIndicator($containerizedIndicator) {
        return $this->ContainerizedIndicator = $containerizedIndicator;
    }

    /**
     * @param string $overridePaperlessIndicator
     * @return InternationalForms
     */
    public function setOverridePaperlessIndicator($overridePaperlessIndicator) {
        return $this->OverridePaperlessIndicator = $overridePaperlessIndicator;
    }

    /**
     * @param string $shipperMemo
     * @return InternationalForms
     */
    public function setShipperMemo($shipperMemo) {
        return $this->ShipperMemo = $shipperMemo;
    }

}
