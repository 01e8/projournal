<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
  public function index()
  {
    $groups = Group::all();

    $groupsArrayReady = [];

    $headerNames = ['ID', 'Название группы', 'Преподаватель', 'Кол-во учеников'];

    foreach ($groups as $row => $group):
      $groupsArrayReady[$row]['id'] = $group->id;
      $groupsArrayReady[$row][0] = $group->name;
      $groupsArrayReady[$row][1] = $group->teacher_id;
      $groupsArrayReady[$row][2] = $group->students->count();;
    endforeach;

    return view('groups.index',[ 'headerNames' => $headerNames, 'groups'=> $groupsArrayReady]);
  }

  public function create()
  {
      return view('groups.create');
  }

  public function store(Request $request)
  {
      $request->validate([
          'name' => 'required',
      ]);

      Group::create($request->all());

      return redirect()->route('groups.index')
          ->with('success','Группа добавлена');
  }

  public function show(Group $group)
  {
      return view('groups.show',compact('group'));
  }

  public function edit(Group $group)
  {
      return view('groups.edit',compact('group'));
  }

  public function update(Request $request, Group $group)
  {
      $request->validate([
          'name' => 'required',
      ]);

      $group->update($request->all());

      return redirect()->route('groups.index')
          ->with('success','Группа успешно изменена');
  }

  public function destroy(Group $group)
  {
      $group->delete();

      return redirect()->route('groups.index')
          ->with('success','Группа удалена');
  }
}
