<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of TrackingData
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TrackingData extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'TrackingData';
    
    /**
     * @param string $trackingNumber
     * @return TrackingData
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }
}
