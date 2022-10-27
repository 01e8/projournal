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
                    <div class="bottom-form-buttons">
                        <!-- ENABLE -->
                        @if(!$user->active)
                        <form onsubmit="return confirm('Вы уверены?')" action="{{ route( 'users.enable', ['id' => $user->id] ) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" style="color: auto;">Активировать</button>
                        </form>
                        @endif

                        <!-- DISABLE -->
                        @if($user->active)
                        <form onsubmit="return confirm('Вы уверены?')" action="{{ route( 'users.enable', ['id' => $user->id] ) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" style="color: auto;">Деактивировать</button>
                        </form>
                        @endif
                    </div>

                </div>
            </div>
        </div>
</x-app-layout>