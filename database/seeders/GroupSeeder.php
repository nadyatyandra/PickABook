<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // popular n new release might be possible to just use released year + how many times
        // the book has been borrowed. For now it's user defined.
        $groups = [
            [
                'name' => 'Editors Pick',
            ],
            [
                'name' => 'Popular',
            ],
            [
                'name' => 'New Release',
            ],
        ];
        foreach ($groups as $key => $value) {
            Group::create($value);
        }
    }
}
