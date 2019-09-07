<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorretoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corretores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_corretor', 50);
            $table->string('creci', 8)->nullable();
            $table->string('email', 50);
            $table->string('fone_cel', 15);
            $table->string('nome_crretora', 50)->nullable();
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
        Schema::dropIfExists('corretores');
    }
}
