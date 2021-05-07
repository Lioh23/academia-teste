<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $fillable = ['matricula', 'nome', 'dnascimento', 'sexo', 'bairro', 'cidade'];

    public $timestamps = false;
}
