<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;

    /**
     * Os atributos que são atribuíveis em massa.
     * [cite_start]Conforme a tabela 'clientes' do documento[cite: 81].
     */
    protected $fillable = [
        'funeraria_id',
        'nome',
        'sobrenome',
        'email',
        'telefone',
    ];

    /**
     * Define o relacionamento: Um Cliente pertence a uma Funeraria.
     */
    public function funeraria(): BelongsTo
    {
        return $this->belongsTo(Funeraria::class);
    }

    /**
     * Define o relacionamento: Um Cliente pode ter vários Memoriais.
     */
    public function memoriais(): HasMany
    {
        return $this->hasMany(Memorial::class);
    }
}
