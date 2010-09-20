<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 26, 2010
 * Time: 12:53:33 PM
 * To change this template use File | Settings | File Templates.
 */
 
class SubClassOf extends ClassAxiom implements IRdfPhp{

    public function __toString() {
        $elements = $this->getElements();
        return $elements[0] . " rdfs:subClassOf " . $elements[1];
    }

    public function getValue() {
        // TODO: Implement getValue() method.
    }

    public function toRdfArray() {
        // TODO: Implement toRdfArray() method.
    }
}
