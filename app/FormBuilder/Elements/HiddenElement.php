<?php

namespace App\FormBuilder\Elements;

class HiddenElement extends BaseElement
{
    public $name;
    public $value;
    
    function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
        
        $this->render();
    }
}

