<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKliencisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kliencis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login');
            $table->string('imie');
            $table->string('nazwisko');
            $table->string('email')->unique();
            $table->string('miasto');
            $table->string('adres_pocztowy');
            $table->string('ulica');
            $table->string('nr_domu',5);
            $table->string('nr_mieszkania',4)->nullable();
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
        Schema::dropIfExists('kliencis');
    }
}
