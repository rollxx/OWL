<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 5, 2010
 * Time: 11:49:57 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ObjectPropertyRange extends ObjectPropertyAxiom {

    private $range;

    function __construct($objectPropertyExpression, $range) {
        parent::__construct($objectPropertyExpression);
        $this->range = $range;
    }

}
