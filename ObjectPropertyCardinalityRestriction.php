<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 9:41:44 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ObjectPropertyCardinalityRestriction extends ObjectPropertyRestriction{

    private $cardinality;

    function __construct($objectPropertyExpression, $nni, $primary = null) {
        parent::__construct($objectPropertyExpression, $primary);
        $this->cardinality = $nni;
    }

    public function __toString() {
        return $this->getObjectPropertyExpression()." ".$this->getRestrictionLabel()." "
                . $this->cardinality . ($this->getClassExpression()? " " . $this->getClassExpression() : "");
    }
}