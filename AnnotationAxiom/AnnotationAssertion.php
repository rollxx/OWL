<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 27, 2010
 * Time: 4:12:13 PM
 * To change this template use File | Settings | File Templates.
 */
 
class AnnotationAssertion extends AnnotationAxiom {

    private $annotationSubject;
    private $annotationValue;

    function __construct($annotationProperty, $annotationSubject, $annotationValue) {
        parent::__construct($annotationProperty);
        $this->annotationSubject = $annotationSubject;
        $this->annotationValue = $annotationValue;
    }
}
