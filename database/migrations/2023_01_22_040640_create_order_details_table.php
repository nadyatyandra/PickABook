<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->primary(['orderHeaderId', 'bookId']);
            $table->unsignedBigInteger('orderHeaderId');
            $table->unsignedBigInteger('bookId');
            $table->foreign('orderHeaderId')->references('id')->on('order_headers')->onDelete('cascade')->onDelete('cascade');
            $table->foreign('bookId')->references('id')->on('books')->onDelete('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
