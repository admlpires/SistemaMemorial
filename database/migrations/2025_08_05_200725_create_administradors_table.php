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
       Schema::create('administradores', function (Blueprint $table) {
    	$table->id();
    	$table->foreignId('funeraria_id')->constrained('funerarias')->onDelete('cascade');
    	$table->string('nome');
    	$table->string('email')->unique();
    	$table->string('password');
    	$table->enum('status', ['habilitado', 'desabilitado'])->default('habilitado');
    	$table->rememberToken();
    	$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradors');
    }
};
