<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tb_producto', function (Blueprint $table) {
            
            $table->string('clave', 50);
            $table->string('nombre', 50);
            $table->decimal('cantidad', 10);
            $table->decimal('costo', 10);
            $table->text('foto')->nullable();
            $table->unsignedBigInteger('id_tipo');
            $table->unsignedBigInteger('id_tienda');
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
        Schema::dropIfExists('tb_producto');
    }
}
