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
                'name' => 'Masashi Kishimoto',
                'photoPath' => 'kishimoto.jpg'
            ],
            [
                'name' => 'Hirohiko Araki',
                'photoPath' => 'araki.jpg'
            ],
            [
                'name' => 'Shuichi Shigeno',
                'photoPath' => 'shigeno.jpg'
            ],
            [
                'name' => 'Hajime Isayama',
                'photoPath' => 'isayama.jpg'
            ],
            [
                'name' => 'Andrew Hussie',
                'photoPath' => 'andrew.jpg'
            ],
            [
                'name' => 'Sukismo',
                'photoPath' => 'sukismo.jpg'
            ],
            [
                'name' => 'Marthen Kaningan',
                'photoPath' => 'marthen.jpg'
            ],
            [
                'name' => 'James Dashner',
                'photoPath' => 'james.jpg'
            ],
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
