<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Package
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Package extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Package';
    
    /**
     * @param PackagingType $packagingType
     * @return Package
     */
    public function setPackagingType($packagingType) {
        return $this->PackagingType = $packagingType;
    }
    
    /**
     * @param Dimensions $dimensions
     * @return Package
     */
    public function setDimensions($dimensions) {
        return $this->Dimensions = $dimensions;
    }
    
    /**
     * @param PackageWeight $packageWeight
     * @return Package
     */
    public function setPackageWeight($packageWeight) {
        return $this->PackageWeight = $packageWeight;
    }
    
    /**
     * @param Commodity $commodity
     * @return Package
     */
    public function setCommodity($commodity) {
        return $this->Commodity = $commodity;
    }
    
    /**
     * @param string $largePackageIndicator
     * @return Package
     */
    public function setLargePackageIndicator($largePackageIndicator) {
        return $this->LargePackageIndicator = $largePackageIndicator;
    }
    
    /**
     * @param PackageServiceOptions $packageServiceOptions
     * @return Package
     */
    public function setPackageServiceOptions($packageServiceOptions) {
        return $this->PackageServiceOptions = $packageServiceOptions;
    }
    
    /**
     * @param string $additionalHandlingIndicator
     * @return Package
     */
    public function setAdditionalHandlingIndicator($additionalHandlingIndicator) {
        return $this->AdditionalHandlingIndicator = $additionalHandlingIndicator;
    }
    
    /**
     * @param string $description
     * @return Package
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
    
    /**
     * @param Packaging $packaging
     * @return Package
     */
    public function setPackaging($packaging) {
        return $this->Packaging = $packaging;
    }
    
    /**
     * @param ReferenceNumber $referenceNumber
     * @return Package
     */
    public function setReferenceNumber($referenceNumber) {
        return $this->ReferenceNumber = $referenceNumber;
    }
}
