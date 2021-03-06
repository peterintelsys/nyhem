<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('number');
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->integer('garagehouse')->nullable();
            $table->integer('garagenbr')->nullable();
            $table->longText('contact')->nullable();
            $table->integer('street_id')->nullable();
            $table->integer('area_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
