<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 5, 2010
 * Time: 11:50:23 PM
 * To change this template use File | Settings | File Templates.
 */
 
class InverseObjectProperties extends ObjectPropertyAxiom {

    function __construct($objectPropertyExpression1, $objectPropertyExpression2) {
        parent::__construct($objectPropertyExpression1);
        $this->addElement($objectPropertyExpression2);
    }

}
