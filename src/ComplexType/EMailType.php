<?php


namespace UPS\ComplexType;
use UPS\AbstractComplexType;
/**
 * Description of EMailType
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EMailType extends AbstractComplexType{
    
    /**
     * @var string
     */
    protected $_name = 'EMailType';
    
    /**
     * @param string $code
     * @return EMailType
     */
    public function setCode($code) {
        return $this->Code = $code;
    }
    
    /**
     * @param string $description
     * @return EMailType
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }
}
