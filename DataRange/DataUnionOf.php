<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 4:41:36 PM
 * To change this template use File | Settings | File Templates.
 */
 
class DataUnionOf extends DataRange{

    private $dataRanges=array();

    public function __construct($dataRange) {
        parent::__construct();
        $this->addElement($dataRange);
    }

    public function addElement(DataIntersectionOf $element){
        $this->dataRanges []= $element;
    }

    public function __toString(){
        return implode(" or ", $this->dataRanges);
    }
}
