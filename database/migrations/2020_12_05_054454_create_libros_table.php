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
            $table->string("isbn", 13)->unique();
            $table->string("año", 4);
            
            $table->unsignedBigInteger("editorial_id");
            $table->unsignedBigInteger("genero_id");

            $table->timestamps();

            
            $table->foreign("editorial_id")->references("id")->on("editorials");
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
