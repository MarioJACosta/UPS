<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Contacts
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Contacts extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'Contacts';

    /**
     * @param ForwardAgent $forwardAgent
     * @return Contacts
     */
    public function setForwardAgent($forwardAgent) {
        return $this->ForwardAgent = $forwardAgent;
    }

    /**
     * @param UltimateConsignee $ultimateConsignee
     * @return Contacts
     */
    public function setUltimateConsignee($ultimateConsignee) {
        return $this->UltimateConsignee = $ultimateConsignee;
    }

    /**
     * @param IntermediateConsignee $intermediateConsignee
     * @return Contacts
     */
    public function setIntermediateConsignee($intermediateConsignee) {
        return $this->IntermediateConsignee = $intermediateConsignee;
    }

    /**
     * @param Producer $producer
     * @return Contacts
     */
    public function setProducer($producer) {
        return $this->Producer = $producer;
    }

}
