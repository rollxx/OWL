<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 5:05:12 PM
 * To change this template use File | Settings | File Templates.
 */
 
class OwlList implements RdfPhp {

    private $list;

    public function toRdfArray() {
        throw new Exception("Please implement and call from the correct class");
    }

    public function __toString() {
        return implode(", ", $this->getElements());
    }

    public function __construct($element) {
        $this->list = array();
        $this->addElement($element);
    }

    public function getElements(){
        return $this->list;
    }

    public function addElement($element){
        $this->list []= $element;
    }

    public function addAllElements(OwlList $list){
        $this->list []= $list->getElements();
    }

}