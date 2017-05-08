<?php

namespace UPS\ComplexType;
use UPS\AbstractComplexType;
/**
 * Description of DeniedPartyScreenerRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeniedPartyScreenerRequest extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'DeniedPartyScreenerRequest';
    
    /**
     * @param Request $request
     * @return DeniedPartyScreenerRequest
     */
    public function setRequest($request) {
        return $this->Request = $request;
    }
    
    /**
     * @param Party $party
     * @return DeniedPartyScreenerRequest
     */
    public function setParty($party) {
        return $this->Party = $party;
    }
    
    /**
     * @param string $transactionReferenceID
     * @return Party
     */
    public function setTransactionReferenceID($transactionReferenceID) {
        return $this->TransactionReferenceID = $transactionReferenceID;
    }
}
