<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 26, 2010
 * Time: 12:53:33 PM
 * To change this template use File | Settings | File Templates.
 */
 
class SubClassOf extends ClassAxiom{

    function __construct($superClassExpression, $subClassExpression) {
        parent::__construct($superClassExpression);
        $this->addElement($subClassExpression);
    }

}
