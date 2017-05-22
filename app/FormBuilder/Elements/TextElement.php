<?php

namespace App\FormBuilder\Elements;

class TextElement extends BaseElement
{
    public $name;
    public $label;
    public $value;
    public $placeholder;
    public $required;    
    
    function __construct($name, $label, $value, $placeholder, $required)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        
        $this->render();
    }
}

