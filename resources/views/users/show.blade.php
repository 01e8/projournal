<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ученик: {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card-board bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="">
                    <div class="">
                        <div class="form-group">
                            <strong>Имя:</strong>
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <strong>Аккаунт:</strong>
                            {{ ($user->active) ? 'Активен' : 'Отключен' }}
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group">
                            <strong>Роли:</strong>

                            @if( count($user->roles) > 0)
                            <ul>
                                @foreach($user->roles as $role)
                                <li>
                                    {{ $role->name }}
                                </li>
                                @endforeach
                            </ul>
                            @else
                                Отсутствуют
                            @endif

                        </div>
                    </div>


                </div>
            </div>
        </div>
</x-app-layout>