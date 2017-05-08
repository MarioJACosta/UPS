<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of ExcludeFromForm
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExcludeFromForm extends AbstractComplexType{
    
    /**
     * @var string 
     */
    protected $_name = 'ExcludeFromForm';
    
    /**
     * @param string $formType
     * @return ExcludeFromForm
     */
    public function setFormType($formType) {
        return $this->FormType = $formType;
    }
}
