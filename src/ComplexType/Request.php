<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Request
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Request extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Request';

    /**
     * Identifies the optional processing to be performed.
     * 
     * @param string $requestOption
     * @return type
     */
    public function setRequestOption($requestOption) {
        return $this->RequestOption = $requestOption;
    }

    /**
     * @param TransactionReference $transactionReference
     * @return Request
     */
    public function setTransactionReference($transactionReference) {
        return $this->TransactionReference = $transactionReference;
    }

    /**
     * @param string $subVersion
     * @return Request
     */
    public function setSubVersion($subVersion) {
        return $this->SubVersion = $subVersion;
    }
    
    /**
     * @param string $requestAction
     * @return Request
     */
    public function setRequestAction($requestAction) {
        return $this->RequestAction = $requestAction;
    }
}
