<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{

    public $tableData;
    public $tableName;
    public $columnHeaderNames;
    public $columnLinkNames;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tableData, $tableName, $columnHeaderNames, $columnLinkNames)
    {
        $this->tableData = $tableData->toArray();
        $this->tableName = $tableName;
        $this->columnHeaderNames = $columnHeaderNames;
        $this->columnLinkNames = $columnLinkNames;

        array_unshift($this->columnHeaderNames , 'ID');

        $tableDataOrdered = [];

        foreach ($this->tableData as $row => $tableDataRow):
          $tableDataOrdered[$row]['id'] = $tableDataRow['id'];
          foreach ($this->columnLinkNames as $column => $linkName):
            $tableDataOrdered[$row][$column] = $tableDataRow[$linkName];
          endforeach;
        endforeach;

        $this->tableData = $tableDataOrdered;
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
