<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 5, 2010
 * Time: 11:49:33 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ObjectPropertyDomain extends ObjectPropertyAxiom {

    private $domain;

    function __construct($objectPropertyExpression, $domain) {
        parent::__construct($objectPropertyExpression);
        $this->domain = $domain;
    }

}
