<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Product
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Product extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Product';

    /**
     * @param string $description
     * @return Product
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

    /**
     * @param Unit $unit
     * @return Product
     */
    public function setUnit($unit) {
        return $this->Unit = $unit;
    }

    /**
     * @param string $commodityCode
     * @return Product
     */
    public function setCommodityCode($commodityCode) {
        return $this->CommodityCode = $commodityCode;
    }

    /**
     * @param string $partNumber
     * @return Product
     */
    public function setPartNumber($partNumber) {
        return $this->PartNumber = $partNumber;
    }

    /**
     * @param string $originCountryCode
     * @return Product
     */
    public function setOriginCountryCode($originCountryCode) {
        return $this->OriginCountryCode = $originCountryCode;
    }

    /**
     * @param string $jointProductionIndicator
     * @return Product
     */
    public function setJointProductionIndicator($jointProductionIndicator) {
        return $this->JointProductionIndicator = $jointProductionIndicator;
    }

    /**
     * @param string $netCostCode
     * @return Product
     */
    public function setNetCostCode($netCostCode) {
        return $this->NetCostCode = $netCostCode;
    }

    /**
     * @param NetCostDateRange $netCostDateRange
     * @return Product
     */
    public function setNetCostDateRange($netCostDateRange) {
        return $this->NetCostDateRange = $netCostDateRange;
    }

    /**
     * @param string $preferenceCriteria
     * @return Product
     */
    public function setPreferenceCriteria($preferenceCriteria) {
        return $this->PreferenceCriteria = $preferenceCriteria;
    }

    /**
     * @param string $producerInfo
     * @return Product
     */
    public function setProducerInfo($producerInfo) {
        return $this->ProducerInfo = $producerInfo;
    }

    /**
     * @param string $marksAndNumbers
     * @return Product
     */
    public function setMarksAndNumbers($marksAndNumbers) {
        return $this->MarksAndNumbers = $marksAndNumbers;
    }

    /**
     * @param string $numberOfPackagesPerCommodity
     * @return Product
     */
    public function setNumberOfPackagesPerCommodity($numberOfPackagesPerCommodity) {
        return $this->NumberOfPackagesPerCommodity = $numberOfPackagesPerCommodity;
    }

    /**
     * @param ProductWeight $productWeight
     * @return Product
     */
    public function setProductWeight($productWeight) {
        return $this->ProductWeight = $productWeight;
    }

    /**
     * @param string $vehicleID
     * @return Product
     */
    public function setVehicleID($vehicleID) {
        return $this->VehicleID = $vehicleID;
    }

    /**
     * @param ScheduleB $scheduleB
     * @return Product
     */
    public function setScheduleB($scheduleB) {
        return $this->ScheduleB = $scheduleB;
    }

    /**
     * @param string $exportType
     * @return Product 
     */
    public function setExportType($exportType) {
        return $this->ExportType = $exportType;
    }

    /**
     * @param string $SEDTotalValue
     * @return Product
     */
    public function setSEDTotalValue($SEDTotalValue) {
        return $this->SEDTotalValue = $SEDTotalValue;
    }

    /**
     * @param ExcludeFromForm $excludeFromForm
     * @return Product
     */
    public function setExcludeFromForm($excludeFromForm) {
        return $this->ExcludeFromForm = $excludeFromForm;
    }

    /**
     * @param PackingListInfo $packingListInfo
     * @return Product
     */
    public function setPackingListInfo($packingListInfo) {
        return $this->PackingListInfo = $packingListInfo;
    }

    /**
     * @param EEIInformation $EEIInformation
     * @return Product
     */
    public function setEEIInformation($EEIInformation) {
        return $this->EEIInformation = $EEIInformation;
    }

    /**
     * @param string $ECCN
     * @return Product
     */
    public function setECCN($ECCN) {
        return $this->ECCN = $ECCN;
    }

    /**
     * @param string $CTPRate
     * @return Product
     */
    public function setCTPRate($CTPRate) {
        return $this->CTPRate = $CTPRate;
    }

    /**
     * @param Quantity $quantity
     * @return Product
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }

    /**
     * @param ValuePerUnit $valuePerUnit
     * @return Product
     */
    public function setValuePerUnit($valuePerUnit) {
        return $this->ValuePerUnit = $valuePerUnit;
    }

    /**
     * @param string $productName
     * @return Product
     */
    public function setProductName($productName) {
        return $this->ProductName = $productName;
    }

    /**
     * @param string $productDescription
     * @return Product
     */
    public function setProductDescription($productDescription) {
        return $this->ProductDescription = $productDescription;
    }

    /**
     * @param string $productCountryCodeOfOrigin
     * @return Product
     */
    public function setProductCountryCodeOfOrigin($productCountryCodeOfOrigin) {
        return $this->ProductCountryCodeOfOrigin = $productCountryCodeOfOrigin;
    }

    /**
     * @param TariffInfo $tariffInfo
     * @return Product
     */
    public function setTariffInfo($tariffInfo) {
        return $this->TariffInfo = $tariffInfo;
    }

    /**
     * @param integer $tariffCodeAlert
     * @return Product
     */
    public function setTariffCodeAlert($tariffCodeAlert) {
        return $this->TariffCodeAlert = $tariffCodeAlert;
    }

    /**
     * @param UnitPrice $unitPrice
     * @return Product
     */
    public function setUnitPrice($unitPrice) {
        return $this->UnitPrice = $unitPrice;
    }
    
    /**
     * @param Weight $weight
     * @return Product
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }
    
    /**
     * @param string $tariffCode
     * @return Product
     */
    public function setTariffCode($tariffCode) {
        return $this->TariffCode = $tariffCode;
    }
    
    /**
     * @param Question $question
     * @return Product
     */
    public function setQuestion($question) {
        return $this->Question = $question;
    }
}
