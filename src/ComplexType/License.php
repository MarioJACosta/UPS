<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of License
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class License extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'License';

    /**
     * @param string $number
     * @return License
     */
    public function setNumber($number) {
        return $this->Number = $number;
    }

    /**
     * @param string $code
     * @return License
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

    /**
     * @param string $licenseLineValue
     * @return License
     */
    public function setLicenseLineValue($licenseLineValue) {
        return $this->LicenseLineValue = $licenseLineValue;
    }

    /**
     * @param string $ECCNNumber
     * @return License
     */
    public function setECCNNumber($ECCNNumber) {
        return $this->ECCNNumber = $ECCNNumber;
    }

}
