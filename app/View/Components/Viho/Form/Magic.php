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
    public $modName;
    public function __construct($model,$extData=null,$uid=null,$modName=null)
    {
        $this->formField=$model::$formFields;
        $this->model=$model;
        $this->extData=$extData;
        $this->modName=$modName;
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
        if (view()->exists($this->modName.'.components.form.magic'))
        {
            return view($this->modName.'.components.form.magic');

        }else{
            return view('components.viho.form.magic');
        }
    }
}
