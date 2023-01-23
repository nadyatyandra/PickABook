<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'NIK' => '0000000000000000',
                'name' => 'Member 1',
                'email' => 'member1@gmail.com',
                'password' => bcrypt('member123'),
                'role_id' => 2
            ],
            [
                'NIK' => '1111111111111111',
                'name' => 'Admin Perpustakaan Adidaya',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('admin123'),
                'role_id' => 1
            ],
        ];
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
