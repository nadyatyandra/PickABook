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
                'memberId' => 1,
                'date' => '2023-01-20',
                'statusId' => 1
            ],
            [
                'memberId' => 1,
                'date' => '2023-01-15',
                'statusId' => 2
            ],
            [
                'memberId' => 1,
                'date' => '2023-01-10',
                'statusId' => 3
            ],
            [
                'memberId' => 1,
                'date' => '2022-12-20',
                'statusId' => 4
            ],
        ];
        foreach ($order_headers as $key => $value) {
            OrderHeader::create($value);
        }
    }
}
