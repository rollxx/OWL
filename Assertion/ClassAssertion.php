<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 27, 2010
 * Time: 5:25:47 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ClassAssertion extends Assertion implements RdfPhp{

    private $classExpression;

    function __construct($individual, $classExpression) {
        parent::__construct($individual);
        $this->classExpression = $classExpression;
    }

    function __toString() {
        return  implode(" ", $this->getElements()). " rdf:type ". $this->classExpression ;
    }

    public function getValue() {
        // TODO: Implement getValue() method.
    }

    public function toRdfArray() {
        return RdfArray::createArray(implode(" ", $this->getElements()), "rdf:type", "".$this->classExpression);
    }
}