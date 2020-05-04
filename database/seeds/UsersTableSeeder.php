<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'dni'=>'123',
            'name'=>'Admin User',
            'email'=>'admin@test.com',
            'password'=>Hash::make('123456789')
        ]);

        $author = User::create([
            'dni'=>'456',
            'name'=>'Author User',
            'email'=>'author@test.com',
            'password'=>Hash::make('123456789')
        ]);

        $user = User::create([
            'dni'=>'789',
            'name'=>'Generic User',
            'email'=>'user@test.com',
            'password'=>Hash::make('123456789')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
