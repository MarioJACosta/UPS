<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Party
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Party extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Party';

    /**
     * @param string $screenType
     * @return Party
     */
    public function setScreenType($screenType) {
        return $this->ScreenType = $screenType;
    }

    /**
     * @param string $contactName
     * @return Party
     */
    public function setContactName($contactName) {
        return $this->ContactName = $contactName;
    }

    /**
     * @param string $companyName
     * @return Party
     */
    public function setCompanyName($companyName) {
        return $this->CompanyName = $companyName;
    }

    /**
     * @param Address $address
     * @return Party
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

    /**
     * @param string $matchLevel
     * @return Party
     */
    public function setMatchLevel($matchLevel) {
        return $this->MatchLevel = $matchLevel;
    }

}
