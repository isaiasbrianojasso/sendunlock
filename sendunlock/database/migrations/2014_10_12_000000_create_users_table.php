<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            //usuario datos
            $table->string('name');
            $table->string('sobrenombre')->nullable();
            $table->string('empresa')->nullable();
            $table->string('website')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('direccion2')->nullable();
            $table->string('estado')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('cp')->nullable();
            $table->string('rol')->nullable();
            $table->date('fechaactivo')->nullable();
            $table->date('fechafinal')->nullable();
            $table->integer('estatus')->nullable();
            $table->string('avatar')->nullable();
            $table->string('url')->nullable();
            $table->string('creditos')->nullable();
            $table->string('lenguaje')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
