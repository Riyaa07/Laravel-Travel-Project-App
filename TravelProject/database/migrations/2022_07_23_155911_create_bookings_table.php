<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('phn');
            $table->string('email');
            $table->string('travel_via');
            $table->string('days');
            $table->string('persons');
            $table->date('from');
            $table->date('to');
            $table->unsignedBigInteger('place_id');
            $table->foreign('place_id')
                ->references('id')->on('places')
                ->onDelete('cascade');
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
        Schema::dropIfExists('bookings');
    }
}
