<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of LabelSpecification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LabelSpecification extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'LabelSpecification';

    /**
     * @param LabelImageFormat $labelImageFormat
     * @return LabelSpecification
     */
    public function setLabelImageFormat($labelImageFormat) {
        return $this->LabelImageFormat = $labelImageFormat;
    }
    
    /**
     * @param string $HTTPUserAgent
     * @return LabelSpecification
     */
    public function setHTTPUserAgent($HTTPUserAgent) {
        return $this->HTTPUserAgent = $HTTPUserAgent;
    }
    
    /**
     * @param LabelStockSize $labelStockSize
     * @return LabelSpecification
     */
    public function setLabelStockSize($labelStockSize) {
        return $this->LabelStockSize = $labelStockSize;
    }
    
    /**
     * @param Instruction $instruction
     * @return LabelSpecification
     */
    public function setInstruction($instruction) {
        return $this->Instruction = $instruction;
    }
}
