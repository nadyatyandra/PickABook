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
                'userId' => 2,
                'libraryId' => 1
            ],

        ];
        foreach ($admins as $key => $value) {
            Admin::create($value);
        }
    }
}
