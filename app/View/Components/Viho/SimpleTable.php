<?php

namespace App\View\Components\Viho;

use Illuminate\View\Component;

class SimpleTable extends Component
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
     *
     * @return void
     */
    public function __construct($column,$record)
    {
        $this->column=$column;
        $this->record=$record;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.viho.simple-table');
    }
}
