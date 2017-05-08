<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PostalCode
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PostalCode extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PostalCode';

    /**
     * @param string $primaryPostalCode
     * @return PostalCode
     */
    public function setPrimaryPostalCode($primaryPostalCode) {
        return $this->PrimaryPostalCode = $primaryPostalCode;
    }

    /**
     * @param string $secondaryPostalCode
     * @return PostalCode
     */
    public function setSecondaryPostalCode($secondaryPostalCode) {
        return $this->SecondaryPostalCode = $secondaryPostalCode;
    }

}
