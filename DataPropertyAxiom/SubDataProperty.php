<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Sep 3, 2010
 * Time: 6:05:01 PM
 * To change this template use File | Settings | File Templates.
 */
 
class SubDataProperty extends DataPropertyAxiom{

    function __construct($subDataPropertyOf, $superDataPropertyOf) {
        parent::__construct($subDataPropertyOf);
        $this->addElement($superDataPropertyOf);
    }


}
