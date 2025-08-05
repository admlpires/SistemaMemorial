<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Administrador extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['funeraria_id', 'nome', 'email', 'password', 'status'];
    protected $hidden = ['password', 'remember_token'];
    protected function casts(): array { return ['password' => 'hashed']; }
    public function funeraria(): BelongsTo { return $this->belongsTo(Funeraria::class); }
}
