<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 2:40:18 PM
 * To change this template use File | Settings | File Templates.
 */
 
class Literal extends AnnotationValue {

    private $lexicalValue;

    function __construct($value) {
        $this->lexicalValue = $value;
    }

    public function __toString() {
        return $this->lexicalValue;
    }

    public function getLexicalValue(){
        return $this->lexicalValue;
    }

    public function getType(){
        return "literal";
    }

    public function toRdfArray() {
        return RdfArray::createArray(
            "s",
            "p",
            "o",
            $this->getType(),
            $this->getLexicalValue(),
            $this instanceof StringLiteral ? $this->getLang():null,
            method_exists($this, "getDatatype")?$this->getDatatype():null
        );
    }
}