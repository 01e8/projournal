<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();

        $groupsArrayReady = [];

        $actions = ['add', 'show', 'edit', 'destroy'];

        $headerNames = ['ID', 'Название группы', 'Преподаватель', 'Кол-во учеников'];

        foreach ($groups as $row => $group) :
            $groupsArrayReady[$row]['id'] = $group->id;
            $groupsArrayReady[$row][0] = $group->name;
            $groupsArrayReady[$row][1] = ($group->teacher === NULL) ? '-' : $group->teacher->name;
            $groupsArrayReady[$row][2] = $group->students->count();;
        endforeach;

        return view('groups.index', ['headerNames' => $headerNames, 'groups' => $groupsArrayReady, 'actions' => $actions]);
    }

    public function create()
    {
        $teachers = User::whereHas('roles', function ($query) {
            $query->where('slug', 'teacher');
        })->get();
        return view('groups.create', ['teachers' => $teachers]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'teacher_id' => 'required',
        ]);

        Group::create($request->all());

        return redirect()->route('groups.index')
            ->with('success', 'Группа добавлена');
    }

    public function show(Group $group)
    {
        return view('groups.show', compact('group'));
    }

    public function edit(Group $group)
    {
        $teachers = User::whereHas('roles', function ($query) {
            $query->where('slug', 'teacher');
        })->get();
        return view('groups.edit', ['group' => $group, 'teachers' => $teachers]);
    }

    public function update(Request $request, Group $group)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $group->update($request->all());

        return redirect()->route('groups.index')
            ->with('success', 'Группа успешно изменена');
    }

    public function destroy(Group $group)
    {
        $group->delete();

        return redirect()->route('groups.index')
            ->with('success', 'Группа удалена');
    }
}
