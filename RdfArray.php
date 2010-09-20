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

    public static function createArray($s, $p, $value, $lang=null, $dataType=null) {
        $rdfPhpType = "uri";
        if($value instanceof Literal) $rdfPhpType = "literal";
        else if(is_string($value)) $rdfPhpType = "bnode";
        
        $literal = array("type"=>$rdfPhpType, "value"=>$value);
        if($value instanceof AnnotationValue){
            $literal["value"] = $value->getValue();
            if($value instanceof StringLiteral) $literal["lang"] = $value->getLang();
            if($value instanceof TypedLiteral) $literal["datatype"] = $value->getDataType();
        }
        if(isset($lang)) $literal["lang"] = $lang;
        if(isset($dataType)) $literal["datatype"] = $dataType->getValue();
        return array($s => array($p => array($literal)));
    }

    public static function getNewBnodeId(){
        return "_:b". self::$id++;
    }
}
