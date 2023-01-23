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
        ];
        foreach($book_categories as $key => $value){
            BookCategory::create($value);
        }
    }
}
