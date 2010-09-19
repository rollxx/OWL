<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 26, 2010
 * Time: 12:52:48 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ClassAxiom extends Axiom{

    private $classExpressions = array();    

    function __construct($element=null, $nextElement=null) {
        if($element) $this->addElement($element);
        if($nextElement) $this->addElement($nextElement);
    }

    public function addElement($element){
        $this->classExpressions []= $element;
    }

    public function getElements(){
        return $this->classExpressions;
    }
}
