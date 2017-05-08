<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of AccessPointSearch
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AccessPointSearch extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'AccessPointSearch';

    /**
     * @param string $publicAccessPointID
     * @return AccessPointSearch
     */
    public function setPublicAccessPointID($publicAccessPointID) {
        return $this->PublicAccessPointID = $publicAccessPointID;
    }

    /**
     * @param string $accessPointStatus
     * @return AccessPointSearch
     */
    public function setAccessPointStatus($accessPointStatus) {
        return $this->AccessPointStatus = $accessPointStatus;
    }

    /**
     * @param string $accountNumber
     * @return AccessPointSearch
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }

    /**
     * @param IncludeCriteria $includeCriteria
     * @return AccessPointSearch
     */
    public function setIncludeCriteria($includeCriteria) {
        return $this->IncludeCriteria = $includeCriteria;
    }

    /**
     * @param ExcludeFromResult $excludeFromResult
     * @return AccessPointSearch
     */
    public function setExcludeFromResult($excludeFromResult) {
        return $this->ExcludeFromResult = $excludeFromResult;
    }

}
