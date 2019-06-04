<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms', function (Blueprint $table) {
            $table->bigIncrements('id');
                  //SMS
                  $table->integer('user_id')->unsigned();//llave foranea
                  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');// propiedaes de la relacion eliminacion en cascada si elimnicas un usuario borras sus notas tambien
                  $table->string('ruta')->nullable();
                  $table->string('modelo')->nullable();
                  $table->string('capacidad')->nullable();
                  $table->string('color')->nullable();
                  $table->string('link')->nullable();
                  $table->string('acortador')->nullable();
                  $table->string('senderid')->nullable();
                  $table->string('pais')->nullable();
                  $table->string('tipomensaje')->nullable();
                  $table->string('destinatario')->nullable();
                  $table->string('mensaje')->nullable();
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
        Schema::dropIfExists('sms');
    }
}
