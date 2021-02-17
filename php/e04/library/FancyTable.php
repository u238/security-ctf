<?php


namespace FancyList;

class FancyTable
{
    private $name;
    private $elements;

    public function __construct($name) {
        $this->name = $name;
        $this->elements = array();
    }

    public function addElement($element) {
        $this->elements[] = $element;
    }

    public function __toString() {
        $result = "<table>";
        foreach ($this->elements as $e) {
            $result .= $e;
        }
        $result .= "</table>";
        return $result;
    }
}