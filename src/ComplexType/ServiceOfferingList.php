<?php

namespace UPS\ComplexType;
use UPS\AbstractComplexType;
/**
 * Description of ServiceOfferingList
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ServiceOfferingList extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'ServiceOfferingList';
    
    /**
     * @param ServiceOffering $serviceOffering
     * @return ServiceOfferingList
     */
    public function setServiceOffering($serviceOffering) {
        return $this->ServiceOffering = $serviceOffering;
    }
}
