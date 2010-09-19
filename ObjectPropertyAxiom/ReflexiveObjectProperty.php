<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 5, 2010
 * Time: 11:57:13 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ReflexiveObjectProperty extends ObjectPropertyAxiom {

    private $irreflexive;

    function __construct($objectPropertyExpression, $irreflexive) {
        parent::__construct($objectPropertyExpression);
        $this->irreflexive = $irreflexive;
    }

}
