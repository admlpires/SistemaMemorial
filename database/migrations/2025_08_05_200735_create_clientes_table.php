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
       Schema::create('clientes', function (Blueprint $table) {
    	$table->id();
    	$table->foreignId('funeraria_id')->constrained('funerarias')->onDelete('cascade');
    	$table->string('nome');
    	$table->string('sobrenome');
    	$table->string('email')->nullable();
    	$table->string('telefone')->nullable();
    	$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
