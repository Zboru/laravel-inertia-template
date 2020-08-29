<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => "Administrator",
            'username' => 'admin',
            'password' => \Illuminate\Support\Facades\Hash::make('kimjun01')
        ]);
        Role::firstOrCreate(['name' => 'admin']);
        $admin = User::find(1);
        $admin->assignRole('admin');
        \App\User::create([
            'name' => "Użytkownik",
            'username' => 'user',
            'password' => \Illuminate\Support\Facades\Hash::make('kimjun01')
        ]);
        Role::firstOrCreate(['name' => 'user']);
        $user = User::find(2);
        $user->assignRole('user');
    }
}
