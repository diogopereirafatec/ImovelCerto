<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquilinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquilinos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->string('cpf', 14)->unique();
            $table->string('rg', 15)->nullable();
            $table->string('fone_rec', 14)->nullable();
            $table->string('contato',20)->nullable();
            $table->string('fone_cel', 15);
            $table->string('endereco', 50)->nullable();;
            $table->string('bairro', 30)->nullable();;
            $table->string('cep', 10)->nullable();;
            $table->string('cidade', 50)->nullable();;
            $table->char('uf', 2)->nullable();;
            $table->string('email', 50);
            $table->date('dt_nasc');
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
        Schema::dropIfExists('inquilinos');
    }
}
