<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ChargeCard
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ChargeCard extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ChargeCard';

    /**
     * @param string $cardHolderName
     * @return ChargeCard
     */
    public function setCardHolderName($cardHolderName) {
        return $this->CardHolderName = $cardHolderName;
    }

    /**
     * @param string $cardType
     * @return ChargeCard
     */
    public function setCardType($cardType) {
        return $this->CardType = $cardType;
    }

    /**
     * @param string $cardNumber
     * @return ChargeCard
     */
    public function setCardNumber($cardNumber) {
        return $this->CardNumber = $cardNumber;
    }

    /**
     * @param string $expirationDate
     * @return ChargeCard
     */
    public function setExpirationDate($expirationDate) {
        return $this->ExpirationDate = $expirationDate;
    }

    /**
     * @param string $securityCode
     * @return ChargeCard
     */
    public function setSecurityCode($securityCode) {
        return $this->SecurityCode = $securityCode;
    }
    
    /**
     * @param CardAddress $cardAddress
     * @return ChargeCard
     */
    public function setCardAddress($cardAddress) {
        return $this->CardAddress = $cardAddress;
    }
}
