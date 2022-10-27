<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Добавление группы
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

                <form action="{{ route('groups.store') }}" method="POST">
                    @csrf

                    <div class="">
                        <div class="">
                            <div class="form-group">
                                <label class="block font-medium text-sm text-gray-700">Название групы:</label>
                                <input type="text" name="name" class="form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <label class="block font-medium text-sm text-gray-700">Преподаватель:</label>
                                <input type="text" name="teacher_id" class="form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block">
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