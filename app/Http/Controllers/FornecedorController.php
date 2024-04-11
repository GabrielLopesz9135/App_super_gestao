<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    private $model;

    public function __construct(Fornecedor $data)
    {
        $this->model = $data;
    }

    public function index()
    {
        $fornecedores = Fornecedor::paginate(10);
        return view('app.fornecedores.index', ['fornecedores' => $fornecedores]);
    }

    public function show(Request $request)
    {
        $fornecedores = $this->model
        ->where('nome', 'like', '%'.$request->input('nome').'%')
        ->where('site', 'like', '%'.$request->input('site').'%')
        ->where('UF', 'like', '%'.$request->input('UF').'%')
        ->where('email', 'like', '%'.$request->input('email').'%')
        ->paginate(10);

        return view('app.fornecedores.show', ['fornecedores'=>$fornecedores, 'request'=> $request->all()]);
    }

    public function create(){
        return view('app.fornecedores.create');
    }

    public function store(Request $request){

        $validate = [
            'email' => 'email',
            'nome' => 'required',
            'site'=> 'required',
            'UF' => 'required|min:2|max:2'
        ];

        $feedback = [
            'email.email' => 'Insira um email válido',
            'required' => 'O campo :attribute precisa ser preenchido',
            'UF.max' => 'As siglas dos estados possuem no máximo 2 letras',
            'UF.min' => 'As siglas dos estados possuem no mínimo 2 letras'
        ];

        $request->validate($validate, $feedback);
        $this->model->create($request->all());

        return redirect()->route('fornecedores.index');
    }

    public function edit($id){

        $fornecedor = $this->model->find($id);

        return view('app.fornecedores.update', ['fornecedor' => $fornecedor]);
    }

    public function update(Request $request){

        $fornecedor = $this->model->find($request->input('id'));
        $update = $fornecedor->update($request->all());

        if($update){
            $mensagem = 'Atualização feita com Sucesso';
        }else{
            $mensagem = 'Houve um erro ao Atualizar';
        }

        return redirect()->route('fornecedores.index');
    }

    public function delete(int $id){
       Fornecedor::find($id)->delete();
       return redirect()->route("fornecedores.index");
    }
}
