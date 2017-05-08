<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Geocode
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Geocode extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Geocode';

    /**
     * @param string $latitude
     * @return Geocode
     */
    public function setLatitude($latitude) {
        return $this->Latitude = $latitude;
    }

    /**
     * @param string $longitude
     * @return Geocode
     */
    public function setLongitude($longitude) {
        return $this->Longitude = $longitude;
    }

}
