<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 4:43:05 PM
 * To change this template use File | Settings | File Templates.
 */
 
class DatatypeRestriction extends DataRange{

    private $dataType;
    private $facet;
    private $restrictionValue;

    function __construct($dataType) {
        parent::__construct();
        $this->setDataType($dataType);
    }

    public function setDataType($dataType){
        $this->dataType = $dataType;
    }

    public function addRestriction($facet, $restrictionValue){
        $this->facet = $facet;
        $this->restrictionValue = $restrictionValue;
    }

    function __toString() {
        return $this->dataType . " [" .$this->facet . " " . $this->restrictionValue . "]";
    }
}
