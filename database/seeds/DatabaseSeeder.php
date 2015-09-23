<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * @var array
     */
    private $tables = array(
        'roles',
        'permissions',
        'permission_role',
        'role_user',
        'password_resets',
        'users'
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->cleanDatabase();
        $this->call('RolesPermissionsTableSeeder');
        $this->call('UsersTableSeeder');
    }
    public function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}

