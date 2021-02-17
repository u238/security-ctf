<?php


namespace FancyList;


use http\Exception\InvalidArgumentException;

class FancyElement
{
    private $content;

    public function __construct($content) {
        // check that content contains only alpha chars and space
        if (preg_match('/[^a-z ]/', $content)) {
            throw new InvalidArgumentException();
        }
        $this->content = $content;
    }

    public function __toString() {
        $fancyString = shell_exec("figlet '" . $this->content . "'");
        return "<td><pre>" . $fancyString . "</pre></td>";
    }
}