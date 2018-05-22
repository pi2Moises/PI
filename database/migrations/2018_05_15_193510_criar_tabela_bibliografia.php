<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaBibliografia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bibliografia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('curso',200);
            $table->string('disciplina',200);
            $table->string('titulo',200);
            $table->string('autor',200);
            $table->string('isbn',200);
            $table->string('ano',200);
            $table->string('editora',200);
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
        Schema::dropIfExists('Bibliografia');
    }
}
