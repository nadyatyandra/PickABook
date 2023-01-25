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
                'NIK' => '1111111111111111',
                'name' => 'Admin Perpustakaan Adidaya',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('admin123'),
                'role_id' => 1
            ],
            [
                'NIK' => '2222222222222222',
                'name' => 'Admin Perpustakaan Bergerak',
                'email' => 'admin2@gmail.com',
                'password' => bcrypt('admin123'),
                'role_id' => 1
            ],
            [
                'NIK' => '3333333333333333',
                'name' => 'Member 1',
                'email' => 'member1@gmail.com',
                'password' => bcrypt('member123'),
                'role_id' => 2
            ],
            [
                'NIK' => '4444444444444444',
                'name' => 'Member 2',
                'email' => 'member2@gmail.com',
                'password' => bcrypt('member123'),
                'role_id' => 2
            ],
            [
                'NIK' => '5555555555555555',
                'name' => 'Member 3',
                'email' => 'member3@gmail.com',
                'password' => bcrypt('member123'),
                'role_id' => 2
            ],
        ];
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
