<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of LandedCostRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LandedCostRequest extends AbstractComplexType {
    
    /**
     * @var string
     */
    protected $_name = 'LandedCostRequest';
    
    /**
     * @param Request $request
     * @return LandedCostRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /** 
     * @param QueryRequest $queryRequest
     * @return LandedCostRequest
     */
    public function setQueryRequest($queryRequest) {
        return $this->QueryRequest = $queryRequest;
    }
    
    /**
     * @param EstimateRequest $estimateRequest
     * @return LandedCostRequest
     */
    public function setEstimateRequest($estimateRequest) {
        return $this->EstimateRequest = $estimateRequest;
    }
}
