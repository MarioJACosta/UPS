<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Commodity
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Commodity extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Commodity';
    
    /**
     * @param string $freightClass
     * @return Commodity
     */
    public function setFreightClass($freightClass) {
        return $this->FreightClass = $freightClass;
    }
    
    /**
     * @param NMFC $nMFC
     * @return Commodity
     */
    public function setNMFC($nMFC) {
        return $this->NMFC = $nMFC;
    }
    
    /** 
     * @param string $commodityID
     * @return Commodity
     */
    public function setCommodityID($commodityID) {
        return $this->CommodityID = $commodityID;
    }
    
    /**
     * @param string $description
     * @return Commodity
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
    
    /**
     * @param Weight $weight
     * @return Commodity
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }
    
    /**
     * @param Dimensions $dimensions
     * @return Commodity
     */
    public function setDimensions($dimensions) {
        return $this->Dimensions = $dimensions;
    }
    
    /**
     * @param string $numberOfPieces
     * @return Commodity
     */
    public function setNumberOfPieces($numberOfPieces) {
        return $this->NumberOfPieces = $numberOfPieces;
    }
    
    /**
     * @param PackagingType $packagingType
     * @return Commodity
     */
    public function setPackagingType($packagingType) {
        return $this->PackagingType = $packagingType;
    }
    
    /**
     * @param string $dangerousGoodsIndicator
     * @return Commodity
     */
    public function setDangerousGoodsIndicator($dangerousGoodsIndicator) {
        return $this->DangerousGoodsIndicator = $dangerousGoodsIndicator;
    }
    
    /**
     * @param CommodityValue $commodityValue
     * @return Commodity
     */
    public function setCommodityValue($commodityValue) {
        return $this->CommodityValue = $commodityValue;
    }
    
    /**
     * @param string $NMFCCommodityCode
     * @return Commodity
     */
    public function setNMFCCommodityCode($NMFCCommodityCode) {
        return $this->NMFCCommodityCode = $NMFCCommodityCode;
    }
    
    /**
     * @param NMFCCommodity $NMFCCommodity
     * @return Commodity
     */
    public function setNMFCCommodity($NMFCCommodity) {
        return $this->NMFCCommodity = $NMFCCommodity;
    }
}
