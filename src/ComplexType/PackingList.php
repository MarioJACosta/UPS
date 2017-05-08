<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PackingList
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PackingList extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'PackingList';

    /**
     * @param ShipFrom $shipFrom
     * @return PackingList
     */
    public function setShipFrom($shipFrom) {
        return $this->ShipFrom = $shipFrom;
    }

    /**
     * @param ShipTo $shipTo
     * @return PackingList
     */
    public function setShipTo($shipTo) {
        return $this->ShipTo = $shipTo;
    }

    /**
     * @param Reference $reference
     * @return PackingList
     */
    public function setReference($reference) {
        return $this->Reference = $reference;
    }

    /**
     * @param HandlingUnit $handlingUnit
     * @return PackingList
     */
    public function setHandlingUnit($handlingUnit) {
        return $this->HandlingUnit = $handlingUnit;
    }

}
