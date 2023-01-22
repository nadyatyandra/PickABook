<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->primary(['cartHeaderId', 'bookId']);
            $table->unsignedBigInteger('cartHeaderId');
            $table->unsignedBigInteger('bookId');
            $table->foreign('cartHeaderId')->references('id')->on('order_headers')->onDelete('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('cart_details');
    }
}
