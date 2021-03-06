<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 26, 2010
 * Time: 12:54:22 PM
 * To change this template use File | Settings | File Templates.
 */
 
class DisjointClasses extends ClassAxiom{

    function __construct($annotations, $list) {
        parent::__construct();
        foreach($list->getElements() as $element){
            $this->addElement($element);
        }
    }

    public function __toString() {
        $elements = $this->getElements();
        return $elements[0] . " owl:equivalentClass " . $elements[1];
    }
    public function toRdfArray(){
        $retval = RdfArray::createArray("bnode", "rdf:type", "owl:AllDisjointClasses");
        $retval []= RdfArray::createArray("bnode", "owl:members", implode(" ", $this->getElements()));
        return $retval;
    }
}