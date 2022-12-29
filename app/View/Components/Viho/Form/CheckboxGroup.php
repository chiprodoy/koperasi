<?php

namespace App\View\Components\Viho\Form;

use App\View\Components\Viho\DataTable;
use Illuminate\View\Component;

class CheckboxGroup extends DataTable
{
    public $id;

    public $name;

    public $model;

    public $column;

    public $record;

    public $dataChecked;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$name,$model=null,$where=null,$dataChecked=null,$order=null,$extData=null)
    {
        //
        $this->id=$id;
        $this->name=$name;
        $this->model=$model;
        $this->column=$model::$columns;
        $this->record=$model;
        $this->where=$where;
        $this->recordPerPage=0;
        $this->order=$order;
        $this->extData=$extData;
        if(is_object($dataChecked[0])) $this->dataChecked=$dataChecked[0]->{$dataChecked[1]};
        else if(!empty($dataChecked[0]) && !is_object($dataChecked[0])) $this->dataChecked=$dataChecked;

        $this->record=$this->setRecord();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.viho.form.checkbox-group');
    }
}
