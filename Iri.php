<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 2:41:41 PM
 * To change this template use File | Settings | File Templates.
 */
 
class Iri extends AnnotationValue {
    private $iri;

    public function __construct($iri) {
        $this->iri=$iri;
    }

    public function getValue(){
        return $this->iri;
    }

    public function __toString() {
        return $this->getValue();
    }
}
