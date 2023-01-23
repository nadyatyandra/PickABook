<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'authorId' => 1,
                'publisherId' => 1,
                'title' => 'The Lost Metal',
                'ISBN' => '9781473215269',
                'photoPath' => 'the-lost-metal.jpg',
                'synopsis' => 'For years, frontier lawman turned big-city senator Waxillium Ladrian has hunted the shadowy organization the Set - with his late uncle and his sister among their leaders - since they started kidnapping people with the power of Allomancy in their bloodlines. When Detective Marasi Colms and her partner, Wayne, find stockpiled weapons bound for the Outer City of Bilming, this opens a new lead. Conflict between the capital, Elendel, and the Outer Cities only favors the Set, and their tendrils now reach to the Elendel Senate - whose corruption Wax and his wife, Steris, have sought to expose - and Bilming is even more entangled.',
                'languageId' => 1,
                'publishedYear' => 2022,
                'weight' => 800
            ],
            [
                'authorId' => 1,
                'publisherId' => 1,
                'title' => 'The Final Empire',
                'ISBN' => '1234567890123',
                'photoPath' => 'the-lost-metal.jpg',
                'synopsis' => 'For years, frontier lawman turned big-city senator Waxillium Ladrian has hunted the shadowy organization the Set - with his late uncle and his sister among their leaders - since they started kidnapping people with the power of Allomancy in their bloodlines. When Detective Marasi Colms and her partner, Wayne, find stockpiled weapons bound for the Outer City of Bilming, this opens a new lead. Conflict between the capital, Elendel, and the Outer Cities only favors the Set, and their tendrils now reach to the Elendel Senate - whose corruption Wax and his wife, Steris, have sought to expose - and Bilming is even more entangled.',
                'languageId' => 1,
                'publishedYear' => 2022,
                'weight' => 800
            ],
        ];
        foreach($books as $key => $value){
            Book::create($value);
        }
    }
}
