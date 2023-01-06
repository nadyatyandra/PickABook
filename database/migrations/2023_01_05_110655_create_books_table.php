<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('authorId')->constrained('authors');
            $table->foreignId('publisherId')->constrained('publishers');
            $table->string('title');
            $table->string('ISBN')->unique();
            $table->string('photoPath');
            $table->longText('synopsis');
            $table->foreignId('languageId')->constrained('languages');
            $table->integer('publishedYear');
            $table->integer('weight');
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
        Schema::dropIfExists('books');
    }
}
