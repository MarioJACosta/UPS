<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of CN22Form
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CN22Form extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'CN22Form';
    
    /**
     * @param string $labelSize
     * @return CN22Form
     */
    public function setLabelSize($labelSize) {
        return $this->LabelSize = $labelSize;
    }
    
    /**
     * @param string $printsPerPage
     * @return CN22Form
     */
    public function setPrintsPerPage($printsPerPage) {
        return $this->PrintsPerPage = $printsPerPage;
    }
    
    /**
     * @param string $labelPrintType
     * @return CN22Form
     */
    public function setLabelPrintType($labelPrintType) {
        return $this->LabelPrintType = $labelPrintType;
    }
    
    /**
     * @param string $CN22Type
     * @return CN22Form
     */
    public function setCN22Type($CN22Type) {
        return $this->CN22Type = $CN22Type;
    }
    
    /**
     * @param string $cN22OtherDescription
     * @return CN22Form
     */
    public function setCN22OtherDescription($cN22OtherDescription) {
        return $this->CN22OtherDescription = $cN22OtherDescription;
    }
    
    /**
     * @param string $foldHereText
     * @return CN22Form
     */
    public function setFoldHereText($foldHereText) {
        return $this->FoldHereText = $foldHereText;
    }
    
    /**
     * @param CN22Content $CN22Content
     * @return CN22Form
     */
    public function setCN22Content($CN22Content) {
        return $this->CN22Content = $CN22Content;
    }
}
