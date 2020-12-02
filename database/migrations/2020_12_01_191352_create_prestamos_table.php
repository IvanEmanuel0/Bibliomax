<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("afiliado_id");
            $table->unsignedBigInteger("libro_id");
            $table->dateTime("fechaPrestamo", 0);
            $table->dateTime("fechaDevolucion", 0);
            $table->timestamps();

            $table->foreign("afiliado_id")->references("id")->on("afiliados");
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
        Schema::dropIfExists('prestamos');
    }
}
