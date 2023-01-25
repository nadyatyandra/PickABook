<?php

namespace Database\Seeders;

use App\Models\OrderHeader;
use Illuminate\Database\Seeder;

class OrderHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order_headers = [
            [
                'memberId' => 2,
                'date' => '2023-01-20',
                'statusId' => 1,
                'libraryId' => 1
            ],
            [
                'memberId' => 2,
                'date' => '2023-01-15',
                'statusId' => 2,
                'libraryId' => 1,
                'courierId' => 1
            ],
            [
                'memberId' => 3,
                'date' => '2023-01-10',
                'statusId' => 3,
                'libraryId' => 1,
                'courierId' => 3
            ],
            [
                'memberId' => 3,
                'date' => '2022-12-20',
                'statusId' => 4,
                'libraryId' => 1,
                'courierId' => 2
            ],
        ];
        foreach ($order_headers as $key => $value) {
            OrderHeader::create($value);
        }
    }
}
