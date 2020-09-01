<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'create user']);
        Permission::create(['name'=>'index user']);
        Permission::create(['name'=>'detail user']);
        Permission::create(['name'=>'edit user']);
        Permission::create(['name'=>'delete user']);
        Permission::create(['name'=>'create role']);
        Permission::create(['name'=>'index role']);
        Permission::create(['name'=>'detail role']);
        Permission::create(['name'=>'edit role']);
        Permission::create(['name'=>'delete role']);
    }
}
