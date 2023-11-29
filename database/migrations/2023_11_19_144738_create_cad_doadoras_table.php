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
        Schema::create('cad_doadoras', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_nasc');
            $table->string('endereco');
            $table->string('fone');
            $table->string('email');
            $table->enum('pre_nat', ['sim', 'nao']);
            $table->date('data_parto');
            $table->enum('tabagismo', ['sim', 'nao']);
            $table->enum('etilismo', ['sim', 'nao']);
            $table->enum('drogas', ['sim', 'nao']);
            $table->enum('exames', ['vdrl', 'hbsag', 'hiv']);
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cad_doadoras');
    }
};
