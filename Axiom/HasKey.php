<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 3, 2010
 * Time: 6:13:19 PM
 * To change this template use File | Settings | File Templates.
 */
 
class HasKey extends Axiom {

    private $objectPropertyExpressions;
    private $dataPropertyExpressions;
    private $classExpression;

    function __construct($classExpression, $objectPropertyExpressions, $dataPropertyExpressions) {
        $this->classExpression = $classExpression;
        $this->objectPropertyExpressions = $objectPropertyExpressions;
        $this->dataPropertyExpressions = $dataPropertyExpressions;
    }
}
