<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{

    private $model;

    public function __construct(SiteContato $data){
        $this->model = $data;
    }
    
    public function contato(Request $request){
       $motivo_contatos = MotivoContato::all();
       return view("site.contato", ['titulo'=>'Contato', 'motivo_contatos'=>$motivo_contatos]);

    }

    public function store(Request $request){

        //Validar Dados
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required'
        ]);
        
        $this->model->create($request->all());

    }
}
