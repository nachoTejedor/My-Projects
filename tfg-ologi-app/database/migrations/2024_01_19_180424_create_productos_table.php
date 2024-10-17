<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->integer('tiempo')->default(0);
            $table->enum('talla',['xs','s','m','l','xl','xxl']);
            $table->text('texto')->default("Lorem Ipsum");
            $table->enum('tipo',['zapatilla',' sudadera','camiseta']);
            $table->string('imagen')->nullable();
            $table->boolean('capucha')->default(false);
            $table->foreignId('id_compra')->constrained('compra')->nullable()->default(null);
            $table->foreignId('id_usuario')->constrained('usuarios')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
