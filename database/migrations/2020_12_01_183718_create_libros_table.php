<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string("titulo", 45);
            $table->string("año", 4);
            $table->string("isbn", 13)->unique();
            $table->string("editorial", 45);
            $table->unsignedBigInteger("genero_id");
            $table->timestamps();

            $table->foreign("genero_id")->references("id")->on("generos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
