<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 27, 2010
 * Time: 5:32:45 PM
 * To change this template use File | Settings | File Templates.
 */
 
class DataPropertyAssertion extends Assertion {

    private $negative;
    private $dataPropertyExpression;
    private $targetValue;

    function __construct($dataPropertyExpression, $sourceIndividual, $targetValue, $negative = false) {
        parent::__construct($sourceIndividual);
        $this->dataPropertyExpression = $dataPropertyExpression;
        $this->targetValue = $targetValue;
        $this->negative = $negative;
    }

}
