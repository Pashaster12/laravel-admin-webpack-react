<?php

namespace App\FormBuilder\Elements;

class SelectElement extends BaseElement
{
    public $name;
    public $label;
    public $options;
    public $valueid;
    public $required;    
    
    function __construct($name, $label, $options, $valueid, $required)
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->valueid = $valueid;
        $this->required = $required;
        
        $this->render();
    }
}

