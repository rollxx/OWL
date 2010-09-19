<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 2:40:18 PM
 * To change this template use File | Settings | File Templates.
 */
 
class Literal extends AnnotationValue {

    private $lexicalValue;


    function __construct($value) {
        $this->lexicalValue = $value;
    }

    public function __toString() {
        return $this->lexicalValue;
    }

}