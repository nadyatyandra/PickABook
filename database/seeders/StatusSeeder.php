<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'status' => 'Order Placed'
            ],
            [
                'status' => 'Pickup Method Confirmed'
            ],
            [
                'status' => 'Borrowing'
            ],
            [
                'status' => 'Returned'
            ],

        ];
        foreach ($statuses as $key => $value) {
            Status::create($value);
        }
    }
}
