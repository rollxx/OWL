<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 9:44:10 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ObjectExactCardinality extends ObjectPropertyCardinalityRestriction{

    public function getRestrictionLabel() {
        return "exactly";
    }
}