<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of HandlingUnit
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HandlingUnit extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'HandlingUnit';

    /**
     * @param Commodity $commodity
     * @return HandlingUnit
     */
    public function setCommodity($commodity) {
        return $this->Commodity = $commodity;
    }

    /**
     * @param string $specialInstructions
     * @return HandlingUnit
     */
    public function setSpecialInstructions($specialInstructions) {
        return $this->SpecialInstructions = $specialInstructions;
    }

    /**
     * @param string $totalNumberOfPieces
     * @return HandlingUnit
     */
    public function setTotalNumberOfPieces($totalNumberOfPieces) {
        return $this->TotalNumberOfPieces = $totalNumberOfPieces;
    }
    
    /**
     * @param string $totalWeight
     * @return HandlingUnit
     */
    public function setTotalWeight($totalWeight) {
        return $this->TotalWeight = $totalWeight;
    }
    
    /**
     * @param UnitOfMeasurement $unitOfMeasurement
     * @return HandlingUnit
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        return $this->UnitOfMeasurement = $unitOfMeasurement;
    }

    /**
     * @param string $currencyCode
     * @return HandlingUnit
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }
}
