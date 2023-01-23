<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
                'userId' => 1,
                'address' => 'Jl. Anggur No 1',
                'phoneNumber' => '08123456789',
            ],

        ];

        foreach ($members as $key => $value) {
            Member::create($value);
        }
    }
}
