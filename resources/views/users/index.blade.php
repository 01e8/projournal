<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Пользователи
    </h2>
  </x-slot>


  @if ($message = Session::get('success'))
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  </div>
  @endif

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="card-board bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <x-table :table-data="$users" table-name='users' :column-header-names="$headerNames" :actions="$actions"/>

      </div>
    </div>
  </div>
</x-app-layout>