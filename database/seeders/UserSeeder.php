<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator'
        ]);

        $pengguna = Role::create([
            'name' => 'user',
            'display_name' => 'User'
        ]);

        $user = new User();
        $user->name = 'Admin K.15.A';
        $user->email = 'adminrentalmobil@gmail.com';
        $user->password = Hash::make('rentalmobilk15a');
        $user->save();

        $pengunjung = new User();
        $pengunjung->name = 'User';
        $pengunjung->email = 'userbiasa@gmail.com';
        $pengunjung->password = Hash::make('userbiasa');
        $pengunjung->save();

        $user->attachRole($admin);
        $pengunjung->attachRole($pengguna);
    }
}
