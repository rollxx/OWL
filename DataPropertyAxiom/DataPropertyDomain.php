<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 3, 2010
 * Time: 6:07:14 PM
 * To change this template use File | Settings | File Templates.
 */
 
class DataPropertyDomain extends DataPropertyAxiom {

    private $domain;

    function __construct($domain, $dataPropertyExpression) {
        parent::__construct($dataPropertyExpression);
        $this->domain = $domain;
    }
}
