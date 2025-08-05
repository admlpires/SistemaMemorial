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
        Schema::create('fotos_galeria', function (Blueprint $table) {
    	$table->id();
    	$table->foreignId('memorial_id')->constrained('memoriais')->onDelete('cascade');
    	$table->string('url_foto');
    	$table->text('descricao')->nullable();
    	$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_galerias');
    }
};
