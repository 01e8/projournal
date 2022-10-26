<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{

    public $tableData;
    public $tableName;
    public $columnHeaderNames;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tableData, $tableName, $columnHeaderNames)
    {
        $this->tableData = $tableData;
        $this->tableName = $tableName;
        $this->columnHeaderNames = $columnHeaderNames;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}
