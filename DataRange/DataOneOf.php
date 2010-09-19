<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 4:42:04 PM
 * To change this template use File | Settings | File Templates.
 */
 
class DataOneOf extends DataRange{

    private $literals;

    function __construct(LiteralList $list) {
        $this->literals = $list;
    }

    function __toString() {
        return "" . $this->literals;
    }

}