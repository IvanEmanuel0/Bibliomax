<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 45);
            $table->string("apellido", 45);
            $table->string("dni", 9);
            $table->string("direccion", 45);
            $table->string("correo", 45);
            $table->string("telefono", 45);
            $table->unsignedBigInteger("usuario_id");
            $table->timestamps();

            $table->foreign("usuario_id")->references("id")->on("usuarios");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
