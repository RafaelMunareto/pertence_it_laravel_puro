<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Historico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('historico');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email');
            $table->timestamps();
            $table->unsignedBigInteger('usuario_id');
        });
        Schema::table('historicos', function($table) {
            $table->foreign('usuario_id')
            ->references('id')
            ->on('usuarios');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historicos');
    }
}
