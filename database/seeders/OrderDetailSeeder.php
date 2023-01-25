<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order_details = [
            [
                'orderHeaderId' => 1,
                'bookId' => 1
            ],
            [
                'orderHeaderId' => 1,
                'bookId' => 2
            ],
            [
                'orderHeaderId' => 2,
                'bookId' => 5
            ],
            [
                'orderHeaderId' => 3,
                'bookId' => 6
            ],
            [
                'orderHeaderId' => 4,
                'bookId' => 8
            ],
            [
                'orderHeaderId' => 4,
                'bookId' => 2
            ],
            [
                'orderHeaderId' => 5,
                'bookId' => 1
            ],
            [
                'orderHeaderId' => 5,
                'bookId' => 3
            ],
            [
                'orderHeaderId' => 6,
                'bookId' => 4
            ],

        ];
        foreach ($order_details as $key => $value) {
            OrderDetail::create($value);
        }
    }
}
