<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)[
                "nome" => "Vinícius",
                "telefone" => "71 986835649",
                "email" => "vinicius@mail.com",
            ],
            (object)[
                "nome" => "Daniela",
                "telefone" => "71 987444444",
                "email" => "dani@mail.com",
            ]
        ];

        $contato = new Contato();

        dd($contato->lista());

        return view('contato.index', compact('contatos'));
    }
    public function criar(Request $variavel)
    {

        dd($variavel['nome']);

        return "Criar Controller do ContatoController";
    }
    public function editar()
    {
        return "Editar Controller do ContatoController";
    }
}
