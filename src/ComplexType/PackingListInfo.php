<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of PackingListInfo
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PackingListInfo extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PackingListInfo';

    /**
     * @param PackageAssociated $packageAssociated
     * @return PackingListInfo
     */
    public function setPackageAssociated($packageAssociated) {
        return $this->PackageAssociated = $packageAssociated;
    }

}
