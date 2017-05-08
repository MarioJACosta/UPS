<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of SubscriptionRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SubscriptionRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SubscriptionRequest';

    /**
     * @param DateTimeRange $dateTimeRange
     * @return SubscriptionRequest
     */
    public function setDateTimeRange($dateTimeRange) {
        return $this->DateTimeRange = $dateTimeRange;
    }

    /**
     * @param string $name
     * @return SubscriptionRequest
     */
    public function setName($name) {
        return $this->Name = $name;
    }
    
    /**
     * @param string $fileName
     * @return SubscriptionRequest
     */
    public function setFileName($fileName) {
        return $this->FileName = $fileName;
    }
    
    
    

}
