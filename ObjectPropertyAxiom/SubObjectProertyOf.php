<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 5, 2010
 * Time: 11:49:07 PM
 * To change this template use File | Settings | File Templates.
 */
 
class SubObjectProertyOf extends ObjectPropertyAxiom {

    function __construct($subObjectPropertyExpressions, $superObjectPropertyExpressions) {
        parent::__construct($subObjectPropertyExpressions);
        $this->addElement($superObjectPropertyExpressions);
    }
}
