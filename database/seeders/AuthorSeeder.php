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
//         $authors = [
//             [
//                 'name' => 'Brandon Sanderson',
//                 'photoPath' => 'brandon.jpg'
//             ],
//         ];
        
        Author::create([
                'id' => 'AU001'
                'name' => 'Masashi Kishimoto',
                'photoPath' => 'kishimoto.jpg'
            ]);
        
        Author::create([
                'id' => 'AU002'
                'name' => 'Hirohiko Araki',
                'photoPath' => 'araki.jpg'
            ]);
        
        Author::create([
                'id' => 'AU003'
                'name' => 'Shuichi Shigeno',
                'photoPath' => 'shigeno.jpg'
            ]);
        
        Author::create([
                'id' => 'AU004'
                'name' => 'Hajime Isayama',
                'photoPath' => 'isayama.jpg'
            ]);
        
        Author::create([
                'id' => 'AU005'
                'name' => 'Andrew Hussie',
                'photoPath' => 'andrew.jpg'
            ]);
        
        Author::create([
                'id' => 'AU006'
                'name' => 'Sukismo',
                'photoPath' => 'sukismo.jpg'
            ]);
        
        Author::create([
                'id' => 'AU007'
                'name' => 'Marthen Kaningan',
                'photoPath' => 'marthen.jpg'
            ]);
        
        Author::create([
                'id' => 'AU008'
                'name' => 'James Dashner',
                'photoPath' => 'james.jpg'
            ]);
        
        Author::create([
                'id' => 'AU009'
                'name' => 'Brandon Sanderson',
                'photoPath' => 'brandon.jpg'
            ]);
        
        foreach($authors as $key => $value){
            Author::create($value);
        }
    }
}
