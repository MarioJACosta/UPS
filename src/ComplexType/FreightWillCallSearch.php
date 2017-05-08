<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of FreightWillCallSearch
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightWillCallSearch extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'FreightWillCallSearch';

    /**
     * @param string $freightWillCallRequestType
     * @return FreightWillCallSearch
     */
    public function setFreightWillCallRequestType($freightWillCallRequestType) {
        return $this->FreightWillCallRequestType = $freightWillCallRequestType;
    }

    /**
     * @param FacilityAddress $facilityAddress
     * @return FreightWillCallSearch
     */
    public function setFacilityAddress($facilityAddress) {
        return $this->FacilityAddress = $facilityAddress;
    }
    
    /**
     * @param string $originOrDestination
     * @return FreightWillCallSearch
     */
    public function setOriginOrDestination($originOrDestination) {
        return $this->OriginOrDestination = $originOrDestination;
    }
    
    /**
     * @param string $formatPostalCode
     * @return FreightWillCallSearch
     */
    public function setFormatPostalCode($formatPostalCode) {
        return $this->FormatPostalCode = $formatPostalCode;
    }
    
    /**
     * @param string $dayOfWeekCode
     * @return FreightWillCallSearch
     */
    public function setDayOfWeekCode($dayOfWeekCode) {
        return $this->DayOfWeekCode = $dayOfWeekCode;
    }

}
