<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ImageFormat
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ImageFormat extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ImageFormat';

    /**
     * @param string $code
     * @return ImageFormat
     */
    public function setCode($code) {
        return $this->Code = $code;
    }

    /**
     * @param string $description
     * @return ImageFormat
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

}
