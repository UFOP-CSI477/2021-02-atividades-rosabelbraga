<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = ['nome_projeto', 'endereco', 'complemento', 'estado', 'cidade', 'cep', 'descricao', 'photo'];
    //protected $guarded = ['admin'];
}
