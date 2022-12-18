<?php

namespace App\View\Components\Viho\Form;

use Illuminate\View\Component;

use function PHPUnit\Framework\isNull;

class InputSelect extends Input
{

    public $option;

    public $optionKey;

    public $optionValue;

     /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$name,$datasource=null,$label='',$value='',$placeholder='',$required=false,$readonly=false,$disabled=false,$autofocus=false,$tabindex=null,$option,$select2=false)
    {
        parent::__construct($id,$name,$datasource,$label,$value,$placeholder,$required,$readonly,$disabled,$autofocus,$tabindex);


        if(is_array($option[0])) $this->option=$option[0];
        else {
            if(method_exists($option,'scopeOptionSelect')){
                $this->option=$option::optionSelect()->get();
                $this->optionKey='id';
                $this->optionValue='optionText';
            }else{
                $this->option=$option[0]::get();
                $this->optionKey=$option[1];
                $this->optionValue=$option[2];
            }
        }
        if(!is_null($datasource)){
            //if($id=='konsentrasi_id') dd($datasource[0]::{$datasource[1]}()->toSql());

            $this->option=$datasource[0]::{$datasource[1]}()->get();
            $this->optionKey=$option[1];
            $this->optionValue=$option[2];
        }

        //
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.viho.form.input-select');
    }
}
