<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'userId' => 1,
                'libraryId' => 1
            ],
            [
                'userId' => 2,
                'libraryId' => 2
            ],

        ];
        foreach ($admins as $key => $value) {
            Admin::create($value);
        }
    }
}
