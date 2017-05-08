<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of InvoiceLineTotal
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class InvoiceLineTotal extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'InvoiceLineTotal';

    /**
     * @param string $currencyCode
     * @return InvoiceLineTotal
     */
    public function setCurrencyCode($currencyCode) {
        return $this->CurrencyCode = $currencyCode;
    }

    /**
     * @param string $monetaryValue
     * @return InvoiceLineTotal
     */
    public function setMonetaryValue($monetaryValue) {
        return $this->MonetaryValue = $monetaryValue;
    }

}
