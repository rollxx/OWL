<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 19, 2010
 * Time: 8:17:01 PM
 * To change this template use File | Settings | File Templates.
 */
 
class RdfArray {

    private static $id = 0;

    public static function createArray($s, $p, /*$o, */$type, $value, $lang=null, $dataType=null) {
        $literal = array("type"=>$type, "value"=>$value);
        if(isset($lang)) $literal["lang"] = $lang;
        if(isset($dataType)) $literal["datatype"] = $dataType->getValue();
        return array($s => array($p => array($literal)));
    }

    public static function getNewBnodeId(){
        return "_:b". self::$id++;
    }
}
