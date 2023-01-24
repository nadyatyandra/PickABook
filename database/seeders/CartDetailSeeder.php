<?php

namespace Database\Seeders;

use App\Models\CartDetail;
use Illuminate\Database\Seeder;

class CartDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cart_detail = [
            [
                'cartHeaderId' => 1,
                'bookId' => 1
            ],
            [
                'cartHeaderId' => 1,
                'bookId' => 2
            ],
            [
                'cartHeaderId' => 2,
                'bookId' => 5
            ],
        ];
        foreach ($cart_detail as $key => $value) {
            CartDetail::create($value);
        }
    }
}
