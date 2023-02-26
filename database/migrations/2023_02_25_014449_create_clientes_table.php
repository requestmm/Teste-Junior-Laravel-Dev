<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {

            $table->unsignedBigInteger('localidade_id');

            $table->id();
            $table->timestamps();
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
            $table->string('nome');
            $table->string('cpf');
            $table->date('data_nascimento');
            

            $table->foreign('localidade_id')->references('id')->on('cidades');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
