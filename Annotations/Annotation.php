<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 27, 2010
 * Time: 5:45:23 PM
 * To change this template use File | Settings | File Templates.
 */
 
class Annotation {
    private $annotationAnnotations;
    private $annotationProperty;
    private $annotationValue;

    function __construct($annotationAnnotations, $annotationProperty, $annotationValue) {
        $this->annotationAnnotations = $annotationAnnotations;
        $this->annotationProperty = $annotationProperty;
        $this->annotationValue = $annotationValue;
    }

}
