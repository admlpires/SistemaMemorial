<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Memorial extends Model
{
    use HasFactory;

    /**
     * Os atributos que são atribuíveis em massa.
     * [cite_start]Conforme a tabela 'memoriais' do documento[cite: 83, 84].
     */
    protected $fillable = [
        'funeraria_id',
        'cliente_id',
        'pnome',
        'sobrenome',
        'data_nascimento',
        'data_falecimento',
        'imagem_perfil_url',
        'nota_falecimento',
        'status',
    ];

    /**
     * Define o relacionamento: Um Memorial pertence a uma Funeraria.
     */
    public function funeraria(): BelongsTo
    {
        return $this->belongsTo(Funeraria::class);
    }

    /**
     * Define o relacionamento: Um Memorial pertence a um Cliente.
     */
    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }

    /**
     * Define o relacionamento: Um Memorial pode ter muitas Fotos na galeria.
     */
    public function fotosGaleria(): HasMany
    {
        return $this->hasMany(FotoGaleria::class);
    }

    /**
     * Define o relacionamento: Um Memorial pode ter muitas Mensagens.
     */
    public function mensagens(): HasMany
    {
        return $this->hasMany(Mensagem::class);
    }
}
