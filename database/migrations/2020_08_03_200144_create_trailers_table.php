<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trailers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Titulo')->nullable();
            $table->text('Sinopsis')->nullable();
            $table->string('Genero')->nullable();
            $table->string('Director')->nullable();
            $table->string('Fecha')->nullable();
            $table->string('Video')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trailers');
    }
}
