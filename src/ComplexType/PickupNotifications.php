<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PickupNotifications
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupNotifications extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PickupNotifications';

    /**
     * @param string $companyName
     * @return PickupNotifications
     */
    public function setCompanyName($companyName) {
        return $this->CompanyName = $companyName;
    }

    /**
     * @param EMailNotification $eMailNotification
     * @return PickupNotifications
     */
    public function setEMailNotification($eMailNotification) {
        return $this->EMailNotification = $eMailNotification;
    }

    /**
     * @param string $failedEMail
     * @return PickupNotifications
     */
    public function setFailedEMail($failedEMail) {
        return $this->FailedEMail = $failedEMail;
    }
}
