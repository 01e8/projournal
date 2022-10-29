<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Изменение данных ученика
        </h2>
    </x-slot>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ошибка!</strong> Что-то пошло не так.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card-board bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('students.update',$student->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="">
                        <div class="">
                            <div class="form-group">
                                <label class="block font-medium text-sm text-gray-700">Имя:</label>
                                <input type="text" name="first_name" value="{{ $student->first_name }}" class="form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <label class="block font-medium text-sm text-gray-700">Фамилия:</label>
                                <input type="text" name="last_name" value="{{ $student->last_name }}" class="form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <label class="block font-medium text-sm text-gray-700">Отчество:</label>
                                <input type="text" name="patronymic" value="{{ $student->patronymic }}" class="form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label class="block font-medium text-sm text-gray-700">Группа:</label>
                                <select name="group_id">
                                    <option value="">Без группы</option>
                                    @foreach ($groups as $group)
                                    <option @if ($group->id === $student->group->id)
                                        selected
                                        @endif
                                        value="{{ $group->id }}">
                                        {{ $group->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label class="block font-medium text-sm text-gray-700">Email:</label>
                                <input type="text" name="email" value="{{ $student->email }}" class="form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <label class="block font-medium text-sm text-gray-700">Телефон:</label>
                                <input type="text" name="phone" value="{{ $student->phone }}" class="form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <label class="block font-medium text-sm text-gray-700">Телеофн родителя:</label>
                                <input type="text" name="parent_phone" value="{{ $student->parent_phone }}" class="form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <label class="block font-medium text-sm text-gray-700">Пометки:</label>
                                <input type="text" name="note" value="{{ $student->note }}" class="form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
                            </div>
                        </div>

                        <div class="bottom-form-buttons">
                            <button type="submit" class="btn btn-success inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Сохранить</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>