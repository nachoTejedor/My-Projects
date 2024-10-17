<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('phone', 20);
            $table->string('email', 100);
            $table->enum('planet', [
                'Mercurio', 
                'Venus', 
                'Tierra', 
                'Marte', 
                'Júpiter', 
                'Saturno', 
                'Urano', 
                'Neptuno'
            ]);
            $table->text('message');
            $table->enum('result', [
                'feliz', 
                'rico', 
                'avion', 
                'dormir'
            ]);
            $table->boolean('privacy')->default(0);
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
        Schema::dropIfExists('mensajes');
    }
}
