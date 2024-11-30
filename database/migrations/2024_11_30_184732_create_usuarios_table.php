<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('Caduduario', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('num_matricula')->unique();
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('serie');
            $table->string('turma');
            $table->string('turno');
            $table->string('telefone');
            $table->string('endereco');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
