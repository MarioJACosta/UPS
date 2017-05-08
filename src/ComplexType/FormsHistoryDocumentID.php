<?php


namespace UPS\ComplexType;
use UPS\AbstractComplexType;
/**
 * Description of FormsHistoryDocumentID
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FormsHistoryDocumentID extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'FormsHistoryDocumentID';
    
    /**
     * @param string $documentID
     * @return FormsHistoryDocumentID
     */
    public function setDocumentID($documentID) {
        return $this->DocumentID = $documentID;
    }
}
