<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of RestrictedArticles
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RestrictedArticles extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RestrictedArticles';

    /**
     * @param string $alcoholicBeveragesIndicator
     * @return RestrictedArticles
     */
    public function setAlcoholicBeveragesIndicator($alcoholicBeveragesIndicator) {
        return $this->AlcoholicBeveragesIndicator = $alcoholicBeveragesIndicator;
    }

    /**
     * @param string $diagnosticSpecimensIndicator
     * @return RestrictedArticles
     */
    public function setDiagnosticSpecimensIndicator($diagnosticSpecimensIndicator) {
        return $this->DiagnosticSpecimensIndicator = $diagnosticSpecimensIndicator;
    }

    /**
     * @param string $perishablesIndicator
     * @return RestrictedArticles
     */
    public function setPerishablesIndicator($perishablesIndicator) {
        return $this->PerishablesIndicator = $perishablesIndicator;
    }

    /**
     * @param string $plantsIndicator
     * @return RestrictedArticles
     */
    public function setPlantsIndicator($plantsIndicator) {
        return $this->PlantsIndicator = $plantsIndicator;
    }

    /**
     * @param string $seedsIndicator
     * @return RestrictedArticles
     */
    public function setSeedsIndicator($seedsIndicator) {
        return $this->SeedsIndicator = $seedsIndicator;
    }

    /**
     * @param string $specialExceptionsIndicator
     * @return RestrictedArticles
     */
    public function setSpecialExceptionsIndicator($specialExceptionsIndicator) {
        return $this->SpecialExceptionsIndicator = $specialExceptionsIndicator;
    }
    
    /**
     * @param string $tobaccoIndicator
     * @return RestrictedArticles
     */
    public function setTobaccoIndicator($tobaccoIndicator) {
        return $this->TobaccoIndicator = $tobaccoIndicator;
    }

}
