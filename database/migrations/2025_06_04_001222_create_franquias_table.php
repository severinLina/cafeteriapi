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
            $table->string(column: 'cpf');
            $table->string(column: 'email');
            $table->string(column: 'celular');
            $table->string(column: 'estado');
            $table->string(column: 'cidade');
            $table->string(column: 'investimento');
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
