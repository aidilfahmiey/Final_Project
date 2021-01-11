<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ticket_no');
            $table->integer('booking_no');
            $table->string('train_id');
            $table->string('origin');
            $table->string('destination');
            $table->integer('price');
            $table->integer('seat_no');
            $table->timestamps();
            $table->foreign('booking_no')
                    ->references('p_name')
                    ->on('passengers')
                    ->onCascade('delete');
            $table->foreign('train_id')
                    ->references('train_id')
                    ->on('trains')
                    ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
