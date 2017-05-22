<?php

namespace App\FormBuilder\Elements;

class TextareaElement extends BaseElement
{
    public $name;
    public $label;
    public $value;
    public $placeholder;
    public $row_count;
    public $required;    
    
    function __construct($name, $label, $value, $placeholder, $row_count, $required)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->row_count = $row_count;
        $this->required = $required;
        
        $this->render();
    }
}

