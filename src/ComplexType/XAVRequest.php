<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of UsernameToken
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class XAVRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'AddressValidationRequest';

    /**
     * @param Request $request
     * @return XAVRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }

    /**
     * If this indicator is present then the region element or any combination of Political Division 1, Political Division 2, PostcodePrimaryLow, and the PostcodeExtendedLow fields will be recognized for validation in addition to the urbanization element. 
     * 
     * @param string $regionalRequestIndicator
     * @return TransactionReference
     */
    public function setRegionalRequestIndicator($regionalRequestIndicator) {
        return $this->RegionalRequestIndicator = $regionalRequestIndicator;
    }

    /**
     * The maximum number of Candidates to return for this request.
     * 
     * @param string $maximumCandidateListSize
     * @return XAVRequest
     */
    public function setMaximumCandidateListSize($maximumCandidateListSize) {
        return $this->MaximumCandidateListSize = $maximumCandidateListSize;
    }

    /**
     * @param AddressKeyFormat $addressKeyFormat
     * @return XAVRequest
     */
    public function setAddressKeyFormat($addressKeyFormat) {
        return $this->AddressKeyFormat = $addressKeyFormat;
    }

}
