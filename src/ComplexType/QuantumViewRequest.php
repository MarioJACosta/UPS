<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of QuantumViewRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class QuantumViewRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'QuantumViewRequest';

    /**
     * @param Request $request
     * @return QuantumViewRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }

    /**
     * @param SubscriptionRequest $subscriptionRequest
     * @return QuantumViewRequest
     */
    public function setSubscriptionRequest($subscriptionRequest) {
        return $this->SubscriptionRequest = $subscriptionRequest;
    }

    /**
     * @param string $bookmark
     * @return QuantumViewRequest
     */
    public function setBookmark($bookmark) {
        return $this->Bookmark = $bookmark;
    }

}
