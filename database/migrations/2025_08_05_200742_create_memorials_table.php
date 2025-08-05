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
        Schema::create('memoriais', function (Blueprint $table) {
    	$table->id();
    	$table->foreignId('funeraria_id')->constrained('funerarias')->onDelete('cascade');
    	$table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
    	$table->string('pnome');
    	$table->string('sobrenome');
    	$table->date('data_nascimento');
    	$table->date('data_falecimento');
    	$table->string('imagem_perfil_url')->nullable();
    	$table->text('nota_falecimento');
    	$table->enum('status', ['habilitado', 'desabilitado'])->default('desabilitado');
    	$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memorials');
    }
};
