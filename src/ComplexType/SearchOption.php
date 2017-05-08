<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of SearchOption
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SearchOption extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SearchOption';

    /**
     * @param OptionType $optionType
     * @return SearchOption
     */
    public function setOptionType($optionType) {
        return $this->OptionType = $optionType;
    }

    /**
     * @param OptionCode $optionCode
     * @return SearchOption
     */
    public function setOptionCode($optionCode) {
        return $this->OptionCode = $optionCode;
    }

    /**
     * @param Relation $relation
     * @return SearchOption
     */
    public function setRelation($relation) {
        return $this->Relation = $relation;
    }

}
