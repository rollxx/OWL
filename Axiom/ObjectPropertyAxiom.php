<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 5, 2010
 * Time: 11:46:20 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ObjectPropertyAxiom extends Axiom {

    private $objectPropertyExpressions = array();

    function __construct($objectPropertyExpression) {
        $this->addElement($objectPropertyExpression);
    }

    public function addElement($objectPropertyExpression){
        // TODO merge arrays
        $this->objectPropertyExpressions []= $objectPropertyExpression;
    }

}
