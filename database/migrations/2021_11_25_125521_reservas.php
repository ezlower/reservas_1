<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_reserva');
            $table->date('checkIn');
            $table->date('checkOut');
            $table->string('observacion');
            $table->unsignedBigInteger('hab_id')->nullable();
            $table->unsignedBigInteger('cli_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
        Schema::table('reservas', function (Blueprint $table) {
            $table->foreign('hab_id')
            ->references('id')->on('rooms')
            ->onDelete('cascade');

            $table->foreign('cli_id')
            ->references('id')->on('clientes')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
