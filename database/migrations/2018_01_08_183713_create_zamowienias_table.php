<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZamowieniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamowienias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('klient_id')->unsigned();
            $table->integer('oferta_id')->unsigned();
            $table->integer('liczba')->unsigned();
            $table->double('wartosc');
            $table->timestamps();
        });

        Schema::table('zamowienias', function (Blueprint $table) {
            $table->foreign('klient_id')->references('id')->on('kliencis');
        });

        Schema::table('zamowienias', function (Blueprint $table) {
            $table->foreign('oferta_id')->references('id')->on('ofertas');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zamowienias');
    }
}
