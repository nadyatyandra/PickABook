<?php

namespace Database\Seeders;

use App\Models\BookLibrary;
use Illuminate\Database\Seeder;

class BookLibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book_libraries = [
            [
                'bookId' => 1,
                'libraryId' => 1,
                'stock' => 1
            ],
            [
                'bookId' => 2,
                'libraryId' => 1,
                'stock' => 2
            ],
            [
                'bookId' => 1,
                'libraryId' => 2,
                'stock' => 3
            ],
        ];
        foreach($book_libraries as $key => $value){
            BookLibrary::create($value);
        }
    }
}
