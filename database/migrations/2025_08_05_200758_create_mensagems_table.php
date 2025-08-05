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
       Schema::create('mensagens', function (Blueprint $table) {
    	$table->id();
    	$table->foreignId('memorial_id')->constrained('memoriais')->onDelete('cascade');
    	$table->string('nome_autor');
    	$table->text('texto_mensagem');
    	$table->boolean('aprovada')->default(true);
    	$table->enum('origem', ['website', 'tablet_guestbook']);
    	$table->timestamp('data_envio')->useCurrent();
    	$table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagems');
    }
};
