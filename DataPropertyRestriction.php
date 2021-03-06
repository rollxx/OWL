<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 25, 2010
 * Time: 12:20:36 AM
 * To change this template use File | Settings | File Templates.
 */
 
class DataPropertyRestriction extends ClassExpression implements IRestriction {

    private $dataPropertyExpression=array();
    private $dataRange;

    public function __toString() {
            return  implode(", ",$this->dataPropertyExpression) . " " . $this->getRestrictionLabel()
                    . ($this->dataRange? " " . $this->dataRange : "");
    }

    function __construct($dataPropertyExpression, $dataRange = null) {
        parent::__construct();
        $this->setDataPropertyExpression($dataPropertyExpression);
        if(isset($dataRange)) $this->dataRange = $dataRange;
    }

    protected function getDataPropertyExpression(){
        return $this->dataPropertyExpression;
    }

    public function setDataPropertyExpression($property){
        $this->dataPropertyExpression []= $property;
    }

    protected function setDataRange($dataRange){
        $this->dataRange = $dataRange;
    }

    protected function getDataRange(){
        return $this->dataRange;
    }


    public function getRestrictionLabel() {
        throw new Exeption("don't call directly!");
    }
}
