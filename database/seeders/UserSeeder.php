<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','admin')->first();
        $teacher = Role::where('slug', 'teacher')->first();
        $studentShow = Permission::where('slug','student-show')->first();

        $user1 = new User();
        $user1->name = 'Олег Голубев';
        $user1->email = 'og.golubev@yandex.ru';
        $user1->active = true;
        $user1->password = bcrypt('secret');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->roles()->attach($teacher);
        $user1->permissions()->attach($studentShow);

        $user2 = new User();
        $user2->name = 'Иван Учитель';
        $user2->email = 'test1@test.com';
        $user2->active = true;
        $user2->password = bcrypt('secret');
        $user2->save();
        $user2->roles()->attach($teacher);
        // $user2->permissions()->attach($studentShow);

        $user3 = new User();
        $user3->name = 'Андрей Учитель';
        $user3->email = 'test2@test.com';
        $user3->active = true;
        $user3->password = bcrypt('secret');
        $user3->save();
    }
}
