<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ученик: {{ $student->first_name }} {{ $student->last_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card-board bg-white overflow-hidden shadow-xl sm:rounded-lg">

              <div class="">
                  <div class="">
                      <div class="form-group">
                          <strong>Имя:</strong>
                          {{ $student->first_name }}
                      </div>
                  </div>
                  <div class="">
                      <div class="form-group">
                          <strong>Фамилия:</strong>
                          {{ $student->last_name }}
                      </div>
                  </div>
                  <div class="">
                      <div class="form-group">
                          <strong>Отчество:</strong>
                          {{ $student->patronymic }}
                      </div>
                  </div>
                  <div class="">
                      <div class="form-group">
                          <strong>Группа:</strong>
                          @isset($student->group->id)<a class="btn btn-info" href="{{ route('groups.show', $student->group->id) }}"><u>@endisset
                            {{ $student->group->name }}
                          @isset($student->group)</u></a>@endisset
                      </div>
                  </div>
                  <div class="">
                      <div class="form-group">
                          <strong>Email:</strong>
                          {{ $student->email }}
                      </div>
                  </div>
                  <div class="">
                      <div class="form-group">
                          <strong>Телефон:</strong>
                          {{ $student->phone }}
                      </div>
                  </div>
                  <div class="">
                      <div class="form-group">
                          <strong>Телеофн родителя:</strong>
                          {{ $student->parent_phone }}
                      </div>
                  </div>
                  <div class="">
                      <div class="form-group">
                          <strong>Пометки:</strong>
                          {{ $student->note }}
                      </div>
                  </div>
              </div>

              <div class="bottom-form-buttons">
                <form onsubmit="return confirm('Вы уверены?')" action="{{ route('students.destroy', $student->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}"><div class="btn btn-success inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Изменить</div></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Удалить</button>
                </form>
              </div>

            </div>
        </div>
    </div>
</x-app-layout>
