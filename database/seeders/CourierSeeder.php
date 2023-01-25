<?php

namespace Database\Seeders;

use App\Models\Courier;
use Illuminate\Database\Seeder;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $couriers = [
            [
                'name' => 'Self Pick-Up'
            ],
            [
                'name' => 'JNE'
            ],
            [
                'name' => 'Gojek'
            ],
            [
                'name' => 'Grab'
            ],
            [
                'name' => 'Si Cepat'
            ],
            [
                'id' => 999,
                'name' => 'Undefined'
            ],

        ];
        foreach ($couriers as $key => $value) {
            Courier::create($value);
        }
    }
}
