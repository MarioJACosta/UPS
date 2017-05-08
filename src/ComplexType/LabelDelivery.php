<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of LabelDelivery
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LabelDelivery extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'LabelDelivery';

    /**
     * @param EMail $eMail
     * @return LabelDelivery
     */
    public function setEMail($eMail) {
        return $this->EMail = $eMail;
    }

    /**
     * @param string $labelLinksIndicator
     * @return LabelDelivery
     */
    public function setLabelLinksIndicator($labelLinksIndicator) {
        return $this->LabelLinksIndicator = $labelLinksIndicator;
    }

}
