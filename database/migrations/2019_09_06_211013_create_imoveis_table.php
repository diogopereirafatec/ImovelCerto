<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('endereco',150);
            $table->string('bairro', 30);
            $table->string('cep', 10);
            $table->string('cidade', 50);
            $table->char('uf', 2);
            $table->integer('proprietarios_id')->unsigned();
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
        Schema::dropIfExists('imoveis');
    }
}
