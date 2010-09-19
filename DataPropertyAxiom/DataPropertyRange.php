<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 3, 2010
 * Time: 6:07:33 PM
 * To change this template use File | Settings | File Templates.
 */
 
class DataPropertyRange extends DataPropertyAxiom {

    private $range;

    function __construct($range, $dataPropertyExpression) {
        parent::__construct($dataPropertyExpression);
        $this->range = $range;
    }

}
    