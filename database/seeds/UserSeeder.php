<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name'=>'Santiago Bedoya',
            'email'=>'santy@gmail.com',
            'password'=>Hash::make('santy123')
        ]);
        $user2 = User::create([
            'name'=>'Sebastian Corrales',
            'email'=>'sebas@gmail.com',
            'password'=>Hash::make('sebas123')
        ]);
        $user1->assignRole(Role::findById(1));
        $user2->assignRole(Role::findById(2));
    }
}
