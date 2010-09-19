<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 5, 2010
 * Time: 11:58:35 PM
 * To change this template use File | Settings | File Templates.
 */
 
class SymmetricObjectProperty extends ObjectPropertyAxiom {

    private $asymmetric;

    function __construct($objectPropertyExpression, $asymmetric) {
        parent::__construct($objectPropertyExpression);
        $this->asymmetric = $asymmetric;
    }
}
