<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 27, 2010
 * Time: 4:12:06 PM
 * To change this template use File | Settings | File Templates.
 */
 
class SubAnnotationPropertyOf extends AnnotationAxiom {
    private $subAnnotationProperty;
    private $superAnnotationProperty;

    function __construct($subAnnotationProperty, $superAnnotationProperty) {
        parent::__construct($subAnnotationProperty);
        $this->addElement($superAnnotationProperty);
    }

}
