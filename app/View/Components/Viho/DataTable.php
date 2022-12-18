<?php

namespace App\View\Components\Viho;

use Illuminate\View\Component;

class DataTable extends Component
{

    /*
     * Tabel Coloumn.
     *
     */
    public $column;
    /*
     * data.
     *
     */
    public $record;

    /*
     * total page.
     *
     */

     public $totalPage;
    /*
     * current page.
     *
     */

     public $currentPage=1;
    /*
     * total record.
     *
     */
    public $totalRecord;
    /*
     * total record.
     *
     */
    public $recordPerPage=10;
    /*
     * model class name.
     *
     */
    public $model;

    /*
     * model class name.
     *
     */
    public $editButton;
    /*
     * model class name.
     *
     */
    public $deleteButton;
  /**
       * Create a new component instance.
       * param $column
     *
     * @return void
     */
    public $showButton;
  /**
       * Create a new component instance.
       * param $column
     *
     * @return void
     */
     public $theadClass="";

       /**
       * Create a new component instance.
       * param $column
     *
     * @return void
     */

    public $where;

           /**
       * Create a new component instance.
       * param $column
     *
     * @return void
     */

    public $keyword;

    public $extData;

    public $order;

    public $extraButton;

    public function __construct($model,$extData=null,$showButton=null,$editButton=null,$deleteButton=null,$where=null,$keyword=null,$order=null,$extraButton='')
    {
        $this->column=$model::$columns;
        $this->model=$model;
        $this->editButton=$editButton;
        $this->deleteButton=$deleteButton;
        $this->showButton=$showButton;
        $this->where=$where;
        $this->keyword=$keyword;
        $this->extData=$extData;
        $this->order=$order;
        $this->record=$this->setRecord();
        $this->extraButton=$extraButton;
        //
    }

    protected function setRecord(){

        if(empty($this->extData)){
            $r=$this->model::orderBy('id','desc');

            if(!empty($this->order)){
                $r=$this->model::orderBy($this->order[0],$this->order[1]);
            }

            if(!empty($this->where)){
                foreach($this->where as $k => $v){
                    if($k=='and'){
                        $r->where($v);
                    }elseif($k=='or'){
                        $r->whereOr($v);
                    } elseif($k=='in'){
                        $r->whereIn($v);
                    }
                }
            }

            $this->totalRecord=$r->count();

            if($this->recordPerPage > 0){
                return $r->paginate($this->recordPerPage);
            }elseif($this->recordPerPage == 0){
                return $r->get();
            }

        }else{
            if(method_exists($this->extData,'paginate')) return $this->extData->paginate($this->recordPerPage);
            else return $this->extData;
        }


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.viho.data-table');
    }
}
