<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_libros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("autor_id");
            $table->unsignedBigInteger("libro_id");
            $table->timestamps();

            $table->foreign("autor_id")->references("id")->on("autors");
            $table->foreign("libro_id")->references("id")->on("libros");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autor_libros');
    }
}
