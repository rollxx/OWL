<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 27, 2010
 * Time: 5:30:45 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ObjectPropertyAssertion extends Assertion {

    private $negative;
    private $objectPropertyExpression;

    function __construct($objectPropertyExpression, $sourceIndividual, $targetIndividual, $negative = false) {
        parent::__construct($sourceIndividual);
        $this->addElement($targetIndividual);
        $this->objectPropertyExpression = $objectPropertyExpression;
        $this->negative = $negative;
    }
}
