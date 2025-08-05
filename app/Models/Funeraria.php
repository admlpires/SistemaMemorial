<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Funeraria extends Model
{
    use HasFactory;

    protected $fillable = ['nome_empresa', 'cnpj', 'subdominio'];

    public function administradores(): HasMany { return $this->hasMany(Administrador::class); }
    public function clientes(): HasMany { return $this->hasMany(Cliente::class); }
    public function memoriais(): HasMany { return $this->hasMany(Memorial::class); }
}
