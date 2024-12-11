<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Douglas admin',  
                'username' => 'douglas',
                'email' => 'dougzin@outlook.pt',
                'role'  => 'admin',
                'status' => 'active',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Douglas usuario',  
                'username' => 'douglasuser',
                'email' => 'douglas@douglas.com',
                'role'  => 'user',
                'status' => 'active',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Douglas vendedor',  
                'username' => 'douglasvendedor',
                'email' => 'dougzin@ovendedor.com',
                'role'  => 'admin',
                'status' => 'active',
                'password' => bcrypt('12345678')
            ]
        ]);
    }
}
