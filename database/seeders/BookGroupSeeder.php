<?php

namespace Database\Seeders;

use App\Models\BookGroup;
use Illuminate\Database\Seeder;

class BookGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book_groups = [
            [
                'bookId' => 1,
                'groupId' => 1
            ],
            [
                'bookId' => 5,
                'groupId' => 1
            ],
            [
                'bookId' => 1,
                'groupId' => 3
            ],
            [
                'bookId' => 9,
                'groupId' => 3
            ],
            [
                'bookId' => 6,
                'groupId' => 2
            ],
            [
                'bookId' => 4,
                'groupId' => 2
            ],
            [
                'bookId' => 2,
                'groupId' => 2
            ],

        ];
        foreach($book_groups as $key => $value){
            BookGroup::create($value);
        }
    }
}
