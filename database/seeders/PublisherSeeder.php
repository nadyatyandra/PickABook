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
            [
                'name' => 'Shueisha',
                'address' => '1-2-1 Nihonbashi, Hongoku-cho, Chuo-ku, Tokyo 103-8345',
                'phoneNumber' => '+81-3-6811-8502',
                'email' => 'legal@shueisha.co.jp'
            ],
            [
                'name' => 'Kodansha',
                'address' => '2-12-21 Otowa,Bunkyo-ku Tokyo 112-8001 Japan',
                'phoneNumber' => '+81-3-5395-3576',
                'email' => 'hello@kodanshacomics.com'
            ],
            [
                'name' => 'Viz Media',
                'address' => '8 rue Ambroise Thomas Paris, 75009 France',
                'phoneNumber' => '+91-120-4089-389',
                'email' => 'info@vizeurope.com'
            ],
            [
                'name' => 'Erlangga',
                'address' => 'Jl. H. Baping Raya No. 100 Ciracas Jakarta 13740, Indonesia',
                'phoneNumber' => '+021-871 7006',
                'email' => 'webmaster@erlangga.co.id'
            ],
            [
                'name' => 'Delacorte Press',
                'address' => '320 Front Street West, Suite 1400, Toronto',
                'phoneNumber' => '+1-888-523-9292',
                'email' => 'canadaweb@penguinrandomhouse.com'
            ],


        ];
        foreach($publishers as $key => $value){
            Publisher::create($value);
        }
    }
}
