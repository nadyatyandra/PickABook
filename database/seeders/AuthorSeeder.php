<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
                'name' => 'Brandon Sanderson',
                'photoPath' => 'brandon.jpg'
            ],
        ];
        foreach($authors as $key => $value){
            Author::create($value);
        }
    }
}
