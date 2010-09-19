<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 25, 2010
 * Time: 12:22:14 AM
 * To change this template use File | Settings | File Templates.
 */
 
class DataExactCardinality extends DataPropertyCardinalityRestriction{

    public function getRestrictionLabel() {
        return "exactly";
    }
}
