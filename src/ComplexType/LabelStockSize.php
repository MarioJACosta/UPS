<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of LabelStockSize
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LabelStockSize extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'LabelStockSize';

    /**
     * @param string $height
     * @return LabelStockSize
     */
    public function setHeight($height) {
        return $this->Height = $height;
    }

    /**
     * @param string $width
     * @return LabelStockSize
     */
    public function setWidth($width) {
        return $this->Width = $width;
    }

}
