<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table -> string('name',100);
            $table ->string('email',100)->unique();
            $table ->string('telefone');
            $table ->date('data de nascimento');
            $table ->string('endereco');
            $table ->string('complemento');
            $table ->string('bairro');
            $table ->string('cep');
            $table->date('data de cadastro');


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
}
