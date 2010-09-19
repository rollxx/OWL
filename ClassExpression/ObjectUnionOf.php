<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 3:57:01 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ObjectUnionOf extends ClassExpression {

//    private $classExpressions;
    
    public function __toString(){
        return implode(" or ", $this->getElements());
    }
}
