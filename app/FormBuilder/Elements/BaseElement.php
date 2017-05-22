<?php

namespace App\FormBuilder\Elements;

use View;

abstract class BaseElement
{
    public function render()
    {
        $data = (array) $this;
        $elementType = $this->typeName();
        
        return View::make($elementType, $data)->render();
    }
    
    private function typeName() :string
    {
        $view = strtolower(substr(class_basename($this), 0, -7));

        return 'theme::' . $view;
    }
}