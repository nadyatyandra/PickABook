<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishers = [
            [
                'name' => 'Gollancz',
                'address' => 'asd',
                'phoneNumber' => '+44123456789',
                'email' => 'gollancz@gollancz.com'
            ],
        ];
        foreach($publishers as $key => $value){
            Publisher::create($value);
        }
    }
}
