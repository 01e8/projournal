<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        $usersArrayReady = [];

        // 'show', 'edit', 'enable', 'disable'
        $actions = ['show', 'edit'];

        $headerNames = ['ID', 'Имя', 'email', 'Роли', 'Аккаунт'];

        foreach ($users as $row => $user) :
            $usersArrayReady[$row]['id'] = $user->id;
            $usersArrayReady[$row][0] = $user->name;
            $usersArrayReady[$row][1] = $user->email;
            if (count($user->roles) > 0 ) {
                $usersArrayReady[$row][2] = '';
                foreach($user->roles as $key => $role)
                {
                    $usersArrayReady[$row][2] = $usersArrayReady[$row][2] . $role->name . ((($key + 1) === count($user->roles)) ? '' : ', ');
                }
            }else{
                $usersArrayReady[$row][2] = '-';
            }
            $usersArrayReady[$row]['active'] = ($user->active) ? 'Активен' : 'Отключен';
        endforeach;

        return view('users.index', ['headerNames' => $headerNames, 'users' => $usersArrayReady, 'actions' => $actions]);
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('users.show', compact('user'));
    }
}
