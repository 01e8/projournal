<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Группы
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

              <a class="btn btn-success" href="{{ route('groups.create') }}"><button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Добавить</button></a>

              <x-table :table-data="$groups" table-name='groups' :column-header-names="['Название группы', 'Преподаватель']" :column-link-names="['name', 'teacher_id']"/>

            </div>
        </div>
    </div>
</x-app-layout>
