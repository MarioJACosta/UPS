<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Documents
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Documents extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Documents';
    
    /**
     * @param Image $image
     * @return Documents
     */
    public function setImage($image) {
        return $this->Image = $image;
    }
    
    /**
     * @param string $packingList
     * @return Documents
     */
    public function setPackingList($packingList) {
        return $this->PackingList = $packingList;
    }

}
