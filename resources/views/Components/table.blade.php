<div class="divTable">
  <div class="divTableBody">
    <div class="divTableHeading">
        @foreach($columnHeaderNames as $columnHeaderName)
        <div class="divTableCell">
          {{ $columnHeaderName }}
        </div>
        @endforeach
        <div class="divTableCell">
        </div>
    </div>
    @foreach($tableData as $tableDataRow)
    <div class="divTableRow">
        @foreach($tableDataRow as $tableDataCell)
        <div class="divTableCell">
          {{ $tableDataCell }}
        </div>
        @endforeach
        <div class="divTableCell" style="text-align: center; white-space: nowrap;">
          <form onsubmit="return confirm('Вы уверены?')" action="{{ route( $tableName . '.destroy', $tableDataRow['id']) }}" method="POST">

              <a class="btn btn-info" href="{{ route( $tableName . '.show', $tableDataRow['id']) }}"><u>Показать</u></a>&nbsp&nbsp|&nbsp

              <a class="btn btn-primary" href="{{ route( $tableName . '.edit', $tableDataRow['id']) }}"><u>Изменить</u></a>&nbsp&nbsp|&nbsp

              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-danger" style="color: red;"><u>Удалить</u></button>
          </form>
        </div>
    </div>
    @endforeach
  </div>
</div>
