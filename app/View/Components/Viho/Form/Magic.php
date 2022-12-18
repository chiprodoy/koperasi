<?php

namespace App\View\Components\Viho\Form;

use Illuminate\View\Component;

class Magic extends Component
{
    /*
     * model class name.
     *
     */
    public $model;
    /*
     * model class name.
     *
     */
    public $formField;

        /*
     * model class name.
     *
     */
    public $extData;
    /*
     * record uid.
     *
     */
    public $uid;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($model,$extData=null,$uid=null)
    {
        $this->formField=$model::$formFields;
        $this->model=$model;
        $this->extData=$extData;
        if(empty($extData) && !empty($uid)) {
            $this->uid=$uid;
            $this->extData=$this->model::where('uid',$this->uid)->first();

        }    //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.viho.form.magic');
    }
}
