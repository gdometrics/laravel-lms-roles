<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\Permission;

class RolesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = Role::create([
            'name' 	=> 'teacher',
            'label' => 'Teacher'
        ]);

        $student = Role::create([
            'name' 	=> 'student',
            'label' => 'Student'
        ]);

        $add_student = Permission::create
        ([
            'name' => 'add_student',
            'label' => 'Add Student'
        ]);

        $remove_student = Permission::create
        ([
            'name' => 'remove_student',
            'label' => 'Remove Student'
        ]);

        $teacher->givePermission($add_student);
        $teacher->givePermission($remove_student);
    }
}
