<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSeat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Seat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seat_no');
            $table->string('status');
            $table->timestamps();
            $table->integer("id_studio")->unsigned();
            $table->foreign("id_studio")->references("id")->on("studio");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Seat');
    }
}
