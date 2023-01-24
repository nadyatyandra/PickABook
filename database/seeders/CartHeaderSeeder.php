<?php

namespace Database\Seeders;

use App\Models\CartHeader;
use Illuminate\Database\Seeder;

class CartHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cart_headers = [
            [
                'memberId' => 1,
                'libraryId' => 1
            ],
            [
                'memberId' => 1,
                'libraryId' => 2
            ],
        ];
        foreach ($cart_headers as $key => $value) {
            CartHeader::create($value);
        }
    }
}
