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
        $bNodeId = RdfArray::getNewBnodeId();
        $nextBNodeId = null;
        $retval = array();
        $elements = $this->getElements();
        foreach ($elements as $element){
            $retval []= RdfArray::createArray($bNodeId, "rdf:first", $element->getType(), "".$element);
            $nextBNodeId = RdfArray::getNewBnodeId();
            $retval []= RdfArray::createArray($bNodeId, "rdf:rest", "bnode", ($element != end($elements)?$nextBNodeId:"rdf:nil"));
            $bNodeId = $nextBNodeId;
        }
        return $retval;
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
        foreach ($list->getElements() as $element){
            $this->list []= $element;
        }
    }

    public function getValue() {
        // TODO: Implement getValue() method.
    }

    public function getType() {
        // TODO: Implement getType() method.
    }

}