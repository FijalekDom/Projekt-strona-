<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{

    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa');
            $table->text('skladniki');
            $table->double('cena_m');
            $table->double('cena_s');
            $table->double('cena_d');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
