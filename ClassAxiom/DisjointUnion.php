<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 26, 2010
 * Time: 12:54:41 PM
 * To change this template use File | Settings | File Templates.
 */
 
class DisjointUnion extends ClassAxiom {

    private $owlClass;

    function __construct($owlClass, $disjointClassExpression) {
        $this->owlClass = $owlClass;
        parent::__construct($disjointClassExpression);
    }
}
