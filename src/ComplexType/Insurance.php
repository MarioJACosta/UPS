<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Insurance
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Insurance extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'Insurance';
    
    /**
     * @param BasicFlexibleParcelIndicator $basicFlexibleParcelIndicator
     * @return Insurance
     */
    public function setBasicFlexibleParcelIndicator($basicFlexibleParcelIndicator) {
        return $this->BasicFlexibleParcelIndicator = $basicFlexibleParcelIndicator;
    }
    
    /**
     * @param ExtendedFlexibleParcelIndicator $extendedFlexibleParcelIndicator
     * @return Insurance
     */
    public function setExtendedFlexibleParcelIndicator($extendedFlexibleParcelIndicator) {
        return $this->ExtendedFlexibleParcelIndicator = $extendedFlexibleParcelIndicator;
    }
    
    /**
     * @param TimeInTransitFlexibleParcelIndicator $timeInTransitFlexibleParcelIndicator
     * @return Insurance
     */
    public function setTimeInTransitFlexibleParcelIndicator($timeInTransitFlexibleParcelIndicator) {
        return $this->TimeInTransitFlexibleParcelIndicator = $timeInTransitFlexibleParcelIndicator;
    }
}
