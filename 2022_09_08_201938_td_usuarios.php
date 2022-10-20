<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tb_usuario', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('clave', 30);
            $table->string('nombre', 50);
            $table->string('apellido_p', 50);
            $table->string('apellido_m', 50);
            $table->date('fecha_nacimiento');
            $table->string('genero', 20);
            $table->text('foto')->nullable();
            $table->text('email')->unique();
            $table->text('pass');
            $table->string('nivel', 1);
            $table->boolean('activo');
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
        //
        Schema::dropIfExists('tb_usuario');
    }
}
