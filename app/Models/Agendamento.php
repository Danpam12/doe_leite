<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'ponto_coleta_id',
        'data',
        'hora',
        'tipo_coleta',
        'nome',
        'cpf',
        'telefone',
        'email',
        'endereco',
    ];

    public function pontoColeta()
    {
        return $this->belongsTo(Ponto_coleta::class, 'ponto_coleta_id');
    }
}
