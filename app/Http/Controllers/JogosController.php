<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;

class JogosController extends Controller
{
    public function index(){
        $jogos = Jogo::all();
        
        $data =[
            'nome' => 'Fifa',
            'ano_criacao' => '1999',
            'valor' => 300
        ];

        Jogo::create($data);

        dd($jogos);
    }
}
