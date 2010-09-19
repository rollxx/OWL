<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 9:43:51 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ObjectMaxCardinality extends ObjectPropertyCardinalityRestriction {

    public function getRestrictionLabel(){
        return "max";
    }

}
