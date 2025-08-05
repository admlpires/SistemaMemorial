<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mensagem extends Model
{
    use HasFactory;

    /**
     * Os atributos que são atribuíveis em massa.
     * [cite_start]Conforme a tabela 'mensagens' do documento[cite: 87, 89, 90].
     */
    protected $fillable = [
        'memorial_id',
        'nome_autor',
        'texto_mensagem',
        'aprovada',
        'origem',
        'data_envio',
    ];

    /**
     * Define o relacionamento: Uma Mensagem pertence a um Memorial.
     */
    public function memorial(): BelongsTo
    {
        return $this->belongsTo(Memorial::class);
    }
}
