<?php

namespace App\View\Components\Viho\Form;

use Illuminate\View\Component;

class InputText extends Input
{

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.viho.form.input-text');
    }
}
