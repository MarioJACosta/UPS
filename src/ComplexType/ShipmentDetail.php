<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipmentDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentDetail';

    /**
     * @param string $hazmatIndicator
     * @return ShipmentDetail
     */
    public function setHazmatIndicator($hazmatIndicator) {
        return $this->HazmatIndicator = $hazmatIndicator;
    }

    /**
     * @param PackagingType $packagingType
     * @return ShipmentDetail
     */
    public function setPackagingType($packagingType) {
        return $this->PackagingType = $packagingType;
    }

    /**
     * @param string $numberOfPieces
     * @return ShipmentDetail
     */
    public function setNumberOfPieces($numberOfPieces) {
        return $this->NumberOfPieces = $numberOfPieces;
    }

    /**
     * @param string $descriptionOfCommodity
     * @return ShipmentDetail
     */
    public function setDescriptionOfCommodity($descriptionOfCommodity) {
        return $this->DescriptionOfCommodity = $descriptionOfCommodity;
    }

    /**
     * @param Weight $weight
     * @return ShipmentDetail
     */
    public function setWeight($weight){
        return $this->Weight = $weight;
    }
    
    /**
     * @param PalletInformation $palletInformation
     * @return ShipmentDetail
     */
    public function setPalletInformation($palletInformation) {
        return $this->PalletInformation = $palletInformation;
    }
}
