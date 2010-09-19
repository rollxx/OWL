<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 27, 2010
 * Time: 5:25:47 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ClassAssertion extends Assertion {

    private $classExpression;

    function __construct($classExpression, $individual) {
        parent::__construct($individual);
        $this->classExpression = $classExpression;
    }
}