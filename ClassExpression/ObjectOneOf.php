<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 3:57:47 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ObjectOneOf extends ClassExpression {

    private $individuals;

    function __construct(OwlList $list) {
        $this->individuals = $list;
    }

}
