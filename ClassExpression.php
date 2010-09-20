<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 3:56:39 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ClassExpression implements IRdfPhp {
    public function getValue() {
        // TODO: Implement getValue() method.
    }

    private $elements;

    function __construct($element=null) {
        $this->elements = array();
        if($element)$this->addElement($element);
    }

    public function addElement($element){
        $this->elements []= $element;
    }

    public function getElements(){
        return $this->elements;
    }
    public function __toString() {
        return implode(" ", $this->getElements());
    }

    public function toRdfArray() {
        throw new Exception("Please implement and call from the correct class");
    }
}