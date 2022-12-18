<?php

namespace App\View\Components\Viho\Form;

use Illuminate\View\Component;

class InputCheckbox extends Input
{

    public $checked;
    public function __construct($id,$name,$dataSource=null,$label='',$value='',$placeholder='',$required=false,$readonly=false,$disabled=false,$autofocus=false,$tabindex=null,$checked='')
    {
        $this->checked=$checked;
        parent::__construct($id,$name,$dataSource,$label,$value,$placeholder,$required,$readonly,$disabled,$autofocus,$tabindex);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.viho.form.input-checkbox');
    }
}
