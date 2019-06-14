<?php

class BinaryNode
{
    public $value;
    public $parent;

    public function __construct(int $value, BinaryNode $parent=NULL)
    {
        $this->value = $value;
        $this->parent = $parent;
    }

}