<?php

namespace Database\Seeders;

use App\Models\Library;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libraries = [
            [
                'name' => 'Perpustakaan Adidaya',
                'address' => 'Jln. Pati Sukem no.109C'
            ],
            [
                'name' => 'Perpustakaan Bergerak',
                'address' => 'Jln. Maju Jaya No 501'
            ],
        ];
        foreach ($libraries as $key => $value) {
            Library::create($value);
        }
    }
}
