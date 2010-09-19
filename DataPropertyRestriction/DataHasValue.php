<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 25, 2010
 * Time: 12:24:28 AM
 * To change this template use File | Settings | File Templates.
 */
 
class DataHasValue extends DataPropertyRestriction {

    private $literal;

    function __construct($dataPropertyExpression, $literal) {
        parent::__construct($dataPropertyExpression);
        $this->literal = $literal;
    }

    public function getRestrictionLabel() {
        return "value";
    }
}
