<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 9:14:58 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ObjectAllValuesFrom extends ObjectPropertyRestriction{
    
    public function getRestrictionLabel() {
        return "only";
    }

    public function getPredicateString(){
        return "owl:allValuesFrom";
    }
    
}
