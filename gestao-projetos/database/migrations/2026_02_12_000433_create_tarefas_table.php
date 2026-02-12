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
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->string('status');

            $table->foreignId('projeto_id')->constrained('projetos')->onDelete('cascade'); // se o projeto for apagado, as tarefas sao apagadas

            $table->foreignId('colaborador_id')->constrained('colaboradores')->onDelete('restrict'); // nao permite apagar colaborador se ele tiver tarefas

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
