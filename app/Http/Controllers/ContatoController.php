<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{

    private $model;

    public function __construct(SiteContato $data){
        $this->model = $data;
    }
    
    public function contato(Request $request){

       return view("site.contato", ['titulo'=>'Contato']);

    }

    public function store(Request $request){

        //Validar Dados
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
        
        $this->model->create($request->all());

    }
}
