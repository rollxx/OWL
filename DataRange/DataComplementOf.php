<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 24, 2010
 * Time: 4:41:02 PM
 * To change this template use File | Settings | File Templates.
 */
 
class DataComplementOf extends DataRange{

    private $dataRange;

    public function __construct($dataAtomic){
        parent::__construct();
        $this->dataRange = $dataAtomic;
    }

    function __toString() {
        return "not ".$this->dataRange;
    }
}
