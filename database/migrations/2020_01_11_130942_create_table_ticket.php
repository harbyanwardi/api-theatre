<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('Ticket', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ticket_code');
            $table->integer('price');
            $table->integer('stock');
            $table->integer("id_studio")->unsigned();
           
            $table->integer("id_schedule")->unsigned();
           
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
        Schema::dropIfExists('Ticket');
    }
}
