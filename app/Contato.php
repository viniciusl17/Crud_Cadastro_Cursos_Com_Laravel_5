<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista()
    {
        return (object)[
            'nome' => 'Teste 1',
            'telefone' => '71 986545487'
        ];
    }
}
