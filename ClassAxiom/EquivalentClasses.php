<?php
/**
 * Created by PhpStorm.
 * User: roll
 * Date: Aug 26, 2010
 * Time: 12:54:00 PM
 * To change this template use File | Settings | File Templates.
 */
 
class EquivalentClasses extends ClassAxiom{
    
    public function __toString() {
        $elements = $this->getElements();
        return $elements[0] . " owl:equivalentClass " . $elements[1];
    }

}
