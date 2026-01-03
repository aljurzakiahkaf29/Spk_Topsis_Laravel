<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('tbl_user')->insert([
            'name' => 'Administrator',
            'username' => 'ADMIN',
            'email' => 'admin@example.com',
            'password' => md5('admin123'), // Using MD5 as per the controller logic
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
