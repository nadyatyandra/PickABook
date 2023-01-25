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
                'userId' => 3,
                'address' => 'Jl. Member No 1',
                'phoneNumber' => '08123456789',
            ],
            [
                'userId' => 4,
                'address' => 'Jl. Member No 2',
                'phoneNumber' => '08123456789',
            ],
            [
                'userId' => 5,
                'address' => 'Jl. Member No 3',
                'phoneNumber' => '08123456789',
            ],

        ];

        foreach ($members as $key => $value) {
            Member::create($value);
        }
    }
}
