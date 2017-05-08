<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ReceiptSpecification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ReceiptSpecification extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ReceiptSpecification';

    /**
     * @param ImageFormat $imageFormat
     * @return ReceiptSpecification
     */
    public function setImageFormat($imageFormat) {
        return $this->ImageFormat = $imageFormat;
    }

}
