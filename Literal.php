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
        $retval = array("type" => $this->getType(), "value" => $this->getLexicalValue());
        if($this instanceof StringLiteral && $this->getLang())
            $retval ["lang"]= $this->getLang();
        else if($this->getDataType())
            $retval ["datatype"] = $this->getDatatype()->getValue();
        return $retval;
    }
}