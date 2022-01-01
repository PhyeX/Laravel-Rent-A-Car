<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',100)->nullable();
            $table->integer('category_id')->default(0);
            $table->string('detail',150)->nullable();

            $table->integer('doors')->nullable();
            $table->integer('seats')->nullable();
            $table->string('lugage')->nullable();
            $table->string('transmission')->nullable();
            $table->integer('age')->nullable();
            $table->integer('price');
            //$table->string('slug',100)->nullable();

            $table->integer('user_id')->nullable();
            $table->string('status',100)->nullable()->default('False');
            $table->timestamps(); // create_at , update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
