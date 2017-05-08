<?php

namespace UPS\ComplexType;

use UPS\AbstractComplexType;

/**
 * Description of Question
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Question extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Question';

    /**
     * @param string $name
     * @return Question
     */
    public function setName($name) {
        return $this->Name = $name;
    }

    /**
     * @param string $answer
     * @return Question
     */
    public function setAnswer($answer) {
        return $this->Answer = $answer;
    }

}
