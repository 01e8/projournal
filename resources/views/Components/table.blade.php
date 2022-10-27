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
      <div class="divTableCell" style="text-align: center; white-space: nowrap; display:flex; align-items:center; justify-content: center;">

        <!-- SHOW -->
        @if(in_array('show', $actions))
        &nbsp&nbsp<a class="btn btn-info" href="{{ route( $tableName . '.show', $tableDataRow['id']) }}"><u>Показать</u></a>&nbsp&nbsp
        @endif

        <!-- EDIT -->
        @if(in_array('edit', $actions))
        &nbsp&nbsp<a class="btn btn-primary" href="{{ route( $tableName . '.edit', $tableDataRow['id']) }}"><u>Изменить</u></a>&nbsp&nbsp
        @endif

        <!-- DELETE -->
        @if(in_array('destroy', $actions))
        <form onsubmit="return confirm('Вы уверены?')" action="{{ route( $tableName . '.destroy', $tableDataRow['id']) }}" method="POST">
          @csrf
          @method('DELETE')
          &nbsp&nbsp<button type="submit" class="btn btn-danger" style="color: red;"><u>Удалить</u></button>&nbsp&nbsp
        </form>
        @endif

        <!-- ENABLE -->
        <!-- @if(in_array('enable', $actions) && !$tableDataRow['active'])
        <form onsubmit="return confirm('Вы уверены?')" action="{{ route( $tableName . '.enable', $tableDataRow['id']) }}" method="POST">
          @csrf
          &nbsp&nbsp<button type="submit" class="btn btn-danger" style="color: auto;"><u>Активировать</u></button>&nbsp&nbsp
        </form>
        @endif -->

        <!-- DISABLE -->
        <!-- @if(in_array('disable', $actions) && $tableDataRow['active'])
        <form onsubmit="return confirm('Вы уверены?')" action="{{ route( $tableName . '.disable', $tableDataRow['id']) }}" method="POST">
          @csrf
          &nbsp&nbsp<button type="submit" class="btn btn-danger" style="color: auto;"><u>Деактивировать</u></button>&nbsp&nbsp
        </form>
        @endif -->

      </div>
    </div>
    @endforeach
  </div>
</div>