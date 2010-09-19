<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 3:56:39 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ClassExpression implements RdfPhp {

    private $elements;
    private $blankNodeId = 0;
    private $blankNodeLabel = '_b:';

    private function getNewBlankNodeId(){
        return $this->blankNodeLabel . $this->blankNodeId++;
    }

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

//    protected function createArray($s, $p, $type, $value, $lang=null, $datatype=null){
//        return array($s => array($p => array(array("type" => $type, "value" => $value))));
//    }
}