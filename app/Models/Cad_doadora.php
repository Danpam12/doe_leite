<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cad_doadora extends Model
{
    use HasFactory;

    protected $fillable = [
            'nome',
            'data_nasc',
            'endereco',
            'fone',
            'email',
            'pre_nat',
            'data_parto',
            'exames',
            'tabagismo',
            'etilismo',
            'drogas',
            'file',
    ];
}
