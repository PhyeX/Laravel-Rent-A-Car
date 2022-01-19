<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('car_id');
            $table->string("where_you_from");
            $table->string("where_you_go");
            $table->string("rezdate");
            $table->string("reztime");
            $table->string("returndate");
            $table->string("returntime")->nullable();
            $table->integer('price')->nullable();
            $table->integer('amount')->nullable()->default(0);
            $table->string('ip')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->nullable()->default("pending");

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
        Schema::dropIfExists('reservations');
    }
}
