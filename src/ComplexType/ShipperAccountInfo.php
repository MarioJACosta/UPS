<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ShipperAccountInfo
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipperAccountInfo extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipperAccountInfo';

    /**
     * @param string $postalCode
     * @return ShipperAccountInfo
     */
    public function setPostalCode($postalCode) {
        return $this->PostalCode = $postalCode;
    }

    /**
     * @param string $countryCode
     * @return ShipperAccountInfo
     */
    public function setCountryCode($countryCode) {
        return $this->CountryCode = $countryCode;
    }

}
