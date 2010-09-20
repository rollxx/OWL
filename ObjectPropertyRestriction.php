<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 3, 2010
 * Time: 5:08:13 PM
 * To change this template use File | Settings | File Templates.
 */

class ObjectPropertyRestriction extends ClassExpression implements IRestriction{
    
    private $classExpression;
    private $objectPropertyExpression;

    function __construct($objectPropertyExpression, $classExpression=null) {
        $this->objectPropertyExpression = $objectPropertyExpression;
        $this->classExpression = $classExpression;
    }

    public function __toString() {
            return  $this->objectPropertyExpression . " " . $this->getRestrictionLabel()
                    . ($this->classExpression? " " . $this->classExpression : "");
    }

    protected function getClassExpression(){
        return $this->classExpression;
    }

    protected function getObjectPropertyExpression(){
        return $this->objectPropertyExpression;
    }
    
    public function getRestrictionLabel() {
        throw new Exception("don't call directly!");
    }

    public function toRdfArray() {
        $bnodeId = RdfArray::getNewBnodeId();
        $retval = RdfArray::createArray($bnodeId, "rdf:type", "uri", "owl:Restriction");
        $retval []= RdfArray::createArray($bnodeId, "owl:onProperty", "uri", $this->getObjectPropertyExpression());
        $retval []= RdfArray::createArray($bnodeId, $this->getPredicateString(), "uri", $this->getClassExpression());
        return $retval;
    }

}