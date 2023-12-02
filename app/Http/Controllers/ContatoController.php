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
    
    public function contato(){

       $motivos_contatos = MotivoContato::all();
       return view("site.contato", ['titulo'=>'Contato', 'motivo_contatos'=>$motivos_contatos]);

       $motivos_contatos = MotivoContato::all();
        return view('site.principal', ['titulo'=>'Principal', 'motivo_contatos'=>$motivos_contatos]);

    }

    public function store(Request $request){

        //Validar Dados
        $request->validate([
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required'
        ],
        [
            'nome.required' => 'O campo nome precisa ser preenchido',
            'nome.min' => 'O campo nome precisa possuir mais de 3 caracteres',
            'nome.max' => 'O campo nome precisa possuir menos de 40 caracteres',
            'nome.unique' => 'Ja existe uma requisição com esse nome',
            'telefone.required' => 'O campo telefone precisa ser preenchido',
            'email.email' => 'Adicione um email valido',
            
            'required' => 'O campo :attribute precisa ser preenchido'
           

        
        ]
    );
        
        $this->model->create($request->all());
        return redirect()->route('site.index');

    }
}
