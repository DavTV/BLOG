<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //sintansión para crear tabla
        Schema::create('cursos',function(Blueprint $tabla){
            $tabla->id(); //crea el id
            $tabla->string('name'); //columna varchar con nombre name
            $tabla->string('slug');// almacenar el nombre del curso con -
            $tabla->text('description'); // más de 255 caracteres
            $tabla->text('categoria');
            $tabla->timestamps(); //crea dos columnas con fecahs de introducción y actualización

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // si existe una tabla cone st nombre la elimina
        Schema::dropIfExists('cursos');
    }
}
