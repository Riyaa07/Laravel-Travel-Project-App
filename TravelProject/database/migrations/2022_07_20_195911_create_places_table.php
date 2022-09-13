<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('place_name');
            $table->string('category');
            $table->string('description');
            $table->string('top_attractions');
            $table->string('things_to_do');
            $table->string('days');
            $table->string('file')->nullable();
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
                ->references('id')->on('countries')
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
        Schema::dropIfExists('places');
    }
}
