<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Permissions and Roles ============

        $permission = new Permission();
        $permission->name = 'Редактировать права';
        $permission->slug = 'permissions-edit';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'Редактировать роли';
        $permission->slug = 'roles-edit';
        $permission->save();

        // Students ============

        $permission = new Permission();
        $permission->name = 'Создавать ученика';
        $permission->slug = 'student-create';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'Редактировать ученика';
        $permission->slug = 'student-edit';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'Смотреть учеников';
        $permission->slug = 'student-show';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'Удалять учеников';
        $permission->slug = 'student-delete';
        $permission->save();

        // Groups ============

        $permission = new Permission();
        $permission->name = 'Создавать группу';
        $permission->slug = 'group-create';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'Редактировать группу';
        $permission->slug = 'group-edit';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'Смотреть группу';
        $permission->slug = 'group-show';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'Удалять группу';
        $permission->slug = 'group-delete';
        $permission->save();

        // Curriculum ============

        $permission = new Permission();
        $permission->name = 'Создавать учебный план';
        $permission->slug = 'curriculum-create';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'Редактировать учебный план';
        $permission->slug = 'curriculum-edit';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'Смотреть учебный план';
        $permission->slug = 'curriculum-show';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'Удалять учебный план';
        $permission->slug = 'curriculum-delete';
        $permission->save();
    }
}
