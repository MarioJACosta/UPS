<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Pickup
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Pickup extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Pickup';
    
    /**
     * @param string $date
     * @return Pickup
     */
    public function setDate($date) {
        return $this->Date = $date;
    }
    
    /**
     * @param string $time
     * @return Pickup
     */
    public function setTime($time) {
        return $this->Time = $time;
    }

}
