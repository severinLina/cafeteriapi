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
        Schema::create('franquias', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'nome');
            $table->string(column: 'Cpf');
            $table->string(column: 'Email');
            $table->string(column: 'Celular');
            $table->string(column: 'Estado');
            $table->string(column: 'Cidade');
            $table->string(column: 'Quanto espera investir?');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('franquias');
    }
};
