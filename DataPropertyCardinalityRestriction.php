<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 25, 2010
 * Time: 5:13:46 PM
 * To change this template use File | Settings | File Templates.
 */
 
class DataPropertyCardinalityRestriction extends DataPropertyRestriction{

    private $cardinality;

    function __construct($dataPropertyExpression, $nni, $dataRange = null) {
        parent::__construct($dataPropertyExpression);
        $this->cardinality = $nni;
        if(isset($dataRange)) $this->setDataRange($dataRange);
    }

    public function getCardinality(){
        return $this->cardinality;
    }

    public function __toString() {
            return  implode(", ",$this->getDataPropertyExpression()) . " " . $this->getRestrictionLabel()
                    . ($this->getCardinality()?" ".$this->getCardinality():"")
                    . ($this->getDataRange()? " " . $this->getDataRange() : "");
    }

}
