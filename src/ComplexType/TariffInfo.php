<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of TariffInfo
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TariffInfo extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TariffInfo';
    
    /**
     * @param string $tariffCode
     * @return TariffInfo
     */
    public function setTariffCode($tariffCode) {
        return $this->TariffCode = $tariffCode;
    }
    
    /**
     * @param string $detailID
     * @return TariffInfo
     */
    public function setDetailID($detailID) {
        return $this->DetailID = $detailID;
    }
    
    /**
     * @param string $secondaryTariffCode
     * @return TariffInfo
     */
    public function setSecondaryTariffCode($secondaryTariffCode) {
        return $this->SecondaryTariffCode = $secondaryTariffCode;
    }
    
    /**
     * @param string $secondaryDetailID
     * @return TariffInfo
     */
    public function setSecondaryDetailID($secondaryDetailID) {
        return $this->SecondaryDetailID = $secondaryDetailID;
    }

}
