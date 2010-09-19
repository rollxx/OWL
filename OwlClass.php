<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 2:41:03 PM
 * To change this template use File | Settings | File Templates.
 */

class OwlClass extends ClassExpression {

    public function __toString() {
        return parent::__toString();
    }

    public function toRdfArray() {
        parent::createArray($this->getNewBlankNodeId(),"rdf:type", "uri", "owl:class");
        parent::toRdfArray();
    }

    function __construct(Iri $element) {
        parent::__construct($element);
    }



}
