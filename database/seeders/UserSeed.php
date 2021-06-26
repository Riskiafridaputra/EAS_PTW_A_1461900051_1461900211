<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
        [
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'alamat' => 'Surabaya',
            'no_telp' => '089127392187',
            'role' => 'admin',
        
        ],
        [
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
            'alamat' => 'Surabaya',
            'no_telp' => '089127392187',
            'role' => 'user',
        ]
    ]);
    }
}
