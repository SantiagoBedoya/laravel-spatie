<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name'=>'Administrador']);
        $guest = Role::create(['name'=>'Invitado']);

        $admin->givePermissionTo('create user');
        $admin->givePermissionTo('edit user');
        $admin->givePermissionTo('detail user');
        $admin->givePermissionTo('index user');
        $admin->givePermissionTo('delete user');
        $admin->givePermissionTo('create role');
        $admin->givePermissionTo('edit role');
        $admin->givePermissionTo('detail role');
        $admin->givePermissionTo('index role');
        $admin->givePermissionTo('delete role');

        $guest->givePermissionTo('index user');
        $guest->givePermissionTo('detail user');
        $guest->givePermissionTo('detail role');
        $guest->givePermissionTo('index role');
    }
}
