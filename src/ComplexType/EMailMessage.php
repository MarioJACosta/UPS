<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of EMailMessage
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EMailMessage extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'EMailMessage';

    /**
     * @param string $eMailAddress
     * @return EMailMessage
     */
    public function setEMailAddress($eMailAddress) {
        return $this->EMailAddress = $eMailAddress;
    }

    /**
     * @param string $undeliverableEMailAddress
     * @return EMailMessage`
     */
    public function setUndeliverableEMailAddress($undeliverableEMailAddress) {
        return $this->UndeliverableEMailAddress = $undeliverableEMailAddress;
    }

}
