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
            $table->increments('ticket_id');
            $table->integer('train_id')->unsigned();
            $table->foreign('train_id')
                    ->references('train_id')
                    ->on('trains')
                    ->onCascade('delete');
            $table->string('origin');
            $table->string('destination');
            $table->integer('price');
            $table->integer('seat_no');
            $table->integer('shift_no')->unsigned();
            $table->foreign('shift_no')
                    ->references('user_id')
                    ->on('admins')
                    ->onCascade('delete');
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
        Schema::dropIfExists('tickets');
    }
}
