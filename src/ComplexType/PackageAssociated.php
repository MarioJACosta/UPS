<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PackageAssociated
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PackageAssociated extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'PackageAssociated';
    
    /**
     * @param string $packageNumber
     * @return PackageAssociated
     */
    public function setPackageNumber($packageNumber) {
        return $this->PackageNumber = $packageNumber;
    }
    
    /**
     * @param string $productAmount
     * @return PackageAssociated
     */
    public function setProductAmount($productAmount) {
        return $this->ProductAmount = $productAmount;
    }
}
