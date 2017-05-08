<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Image
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Image extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Image';
    
    /**
     * @param Type $type
     * @return Image
     */
    public function setType($type) {
        return $this->Type = $type;
    }
    
    /**
     * @param string $labelsPerPage
     * @return Image
     */
    public function setLabelsPerPage($labelsPerPage) {
        return $this->LabelsPerPage = $labelsPerPage;
    }
    
    /**
     * @param Format $format
     * @return Image
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }
    
    /**
     * @param PrintFormat $printFormat
     * @return Image
     */
    public function setPrintFormat($printFormat) {
        return $this->PrintFormat = $printFormat;
    }
    
    /**
     * @param PrintSize $printSize
     * @return Image
     */
    public function setPrintSize($printSize) {
        return $this->PrintSize = $printSize;
    }

}
