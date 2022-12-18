<?php

namespace App\View\Components\Viho\Form;

use Illuminate\View\Component;

class Input extends Component
{
    public $id;

    public $name;

    public $label;


    public $value;

    public $readonly;

    public $disabled;

    public $autofocus;

    public $tabindex;

    public $placeholder;

    public $required;

    public $dataSource;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$name,$datasource=null,$label='',$value='',$placeholder='',$required=false,$readonly=false,$disabled=false,$autofocus=false,$tabindex=null)
    {
        $this->id=$id;
        $this->name=$name;
        $this->label=$label;
        $this->value=$value;
        $this->readonly=$readonly;
        $this->disabled=$disabled;
        $this->autofocus=$autofocus;
        $this->tabindex=$tabindex;
        $this->placeholder=$placeholder;
        $this->required=$required;
        $this->dataSource=$datasource;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.viho.form.input-email');
    }
}
