<?php

namespace App\View\Components\Viho\Form;

use Illuminate\View\Component;

class InputDate extends Input
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$name,$datasource=null,$label='',$value='',$placeholder='',$required=false,$readonly=false,$disabled=false,$autofocus=false,$tabindex=null)
    {
        parent::__construct($id,$name,$datasource,$label,$value,$placeholder,$required,$readonly,$disabled,$autofocus,$tabindex);
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.viho.form.input-date');
    }
}
