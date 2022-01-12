<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // users es el nombre la tabla acrear
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // intero, sin signos y autoincremental
            $table->string('name'); // varchar de 100, más de 255 es un text()
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();//puede ser vacío
            $table->string('password');
             
            $table->rememberToken();// columna d tamñpo varchar que almacena un token cuando el usuario marca mantener la sesión activada
            $table->timestamps();// crea dos columnas que almacena la fecha y hora de inserción y modificación
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');//elimina la tabla users
        
    }
}
