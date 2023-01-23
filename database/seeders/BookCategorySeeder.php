<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book_categories = [
            [
                'bookId' => 1,
                'categoryId' => 1
            ],
            [
                'bookId' => 2,
                'categoryId' => 1
            ],
            [
                'bookId' => 3,
                'categoryId' => 4
            ],
            [
                'bookId' => 4,
                'categoryId' => 4
            ],
            [
                'bookId' => 4,
                'categoryId' => 3
            ],
            [
                'bookId' => 5,
                'categoryId' => 4
            ],
            [
                'bookId' => 6,
                'categoryId' => 4
            ],
            [
                'bookId' => 7,
                'categoryId' => 4
            ],
            [
                'bookId' => 8,
                'categoryId' => 4
            ],
            [
                'bookId' => 9,
                'categoryId' => 5
            ],
            [
                'bookId' => 10,
                'categoryId' => 5
            ],
            [
                'bookId' => 11,
                'categoryId' => 4
            ],
            [
                'bookId' => 12,
                'categoryId' => 4
            ],
            [
                'bookId' => 13,
                'categoryId' => 4
            ],
        ];
        foreach($book_categories as $key => $value){
            BookCategory::create($value);
        }
    }
}
