<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FotoGaleria extends Model
{
    use HasFactory;

    /**
     * O nome da tabela associada com o model.
     * Necessário porque o nome da classe 'FotoGaleria' não segue a convenção
     * padrão do Laravel para o nome da tabela 'fotos_galeria'.
     */
    protected $table = 'fotos_galeria';

    /**
     * Os atributos que são atribuíveis em massa.
     * [cite_start]Conforme a tabela 'fotos_galeria' do documento[cite: 85, 86].
     */
    protected $fillable = [
        'memorial_id',
        'url_foto',
        'descricao',
    ];

    /**
     * Define o relacionamento: Uma Foto pertence a um Memorial.
     */
    public function memorial(): BelongsTo
    {
        return $this->belongsTo(Memorial::class);
    }
}
