<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('nombre_usuario')->unique();
			$table->string('nombre');
			$table->string('apellidos');
			$table->string('contrasena')->default("admin");
			$table->boolean('esAdmin')->default(FALSE);
			$table->string('correo');
            $table->string('telefono');});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
