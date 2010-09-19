<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 27, 2010
 * Time: 4:11:44 PM
 * To change this template use File | Settings | File Templates.
 */
 
class AnnotationAxiom extends Axiom {

    private $annotationProperty = array();

    function __construct($annotationProperty) {
        $this->addElement($annotationProperty);
    }

    public function addElement($element){
        $this->annotationProperty []=$element;
    }

}
