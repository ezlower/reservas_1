<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pagos', function (Blueprint $table) {
            $table->id();

            $table->integer('comprobante');
            $table->float('total_pago');
            $table->date('fecha_emision');
            $table->date('fecha_pago');

            $table->unsignedBigInteger('res_id')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
        Schema::table('pagos', function (Blueprint $table) {
            $table->foreign('res_id')->references('id')
            ->on('reservas')
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
