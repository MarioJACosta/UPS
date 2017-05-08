<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of labelRecoveryRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LabelRecoveryRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'LabelRecoveryRequest';

    /**
     * @param Request $request
     * @return LabelRecoveryRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }

    /**
     * @param LabelSpecification $labelSpecification
     * @return LabelRecoveryRequest
     */
    public function setLabelSpecification($labelSpecification) {
        return $this->LabelSpecification = $labelSpecification;
    }

    /**
     * @param LabelImageFormat $labelImageFormat
     * @return LabelRecoveryRequest
     */
    public function setLabelImageFormat($labelImageFormat) {
        return $this->LabelImageFormat = $labelImageFormat;
    }
    
    /**
     * @param Translate $translate
     * @return LabelRecoveryRequest
     */
    public function setTranslate($translate) {
        return $this->Translate = $translate;
    }
    
    /** 
     * @param LabelDelivery $labelDelivery
     * @return LabelRecoveryRequest
     */
    public function setLabelDelivery($labelDelivery) {
        return $this->LabelDelivery = $labelDelivery;
    }
    
    /**
     * @param string $trackingNumber
     * @return LabelRecoveryRequest
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }
    
    /**
     * @param ReferenceValues $referenceValues
     * @return LabelRecoveryRequest
     */
    public function setReferenceValues($referenceValues) {
        return $this->ReferenceValues = $referenceValues;
    }

}
