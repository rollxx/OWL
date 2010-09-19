<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 3:58:05 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ObjectIntersectionOf extends ClassExpression {

//    private $classExpressions;

    public function __toString(){
        return "(" . implode(" and ", $this->getElements()) .")";
    }

}
