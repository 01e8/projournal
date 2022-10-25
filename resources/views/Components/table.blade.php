<div class="divTable">
  <div class="divTableBody">
    <div class="divTableHeading">
        @foreach($columnHeaderNames as $columnHeaderName)
        <div class="divTableCell">
          {{ $columnHeaderName }}
        </div>
        @endforeach
    </div>
    @foreach($tableData as $tableDataRow)
    <div class="divTableRow">
        @foreach($tableDataRow as $tableDataCell)
        <div class="divTableCell">
          {{ $tableDataCell }}
        </div>
        @endforeach
    </div>
    @endforeach
  </div>
</div>
