<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{

    protected  $fillable = [
        'nome', 'num_matricula','email', 'senha', 'serie', 'turma', 'turno', 'telefone',
        'endereco',
    ];

}
