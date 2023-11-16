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
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ponto_coleta_id');
            $table->foreign('ponto_coleta_id')->references('id')->on('ponto_coletas');
            $table->date('data');
            $table->time('hora');
            $table->enum('tipo_coleta', ['domicilio', 'presencial']);
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('telefone');
            $table->string('email')->unique();
            $table->string('endereco');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
