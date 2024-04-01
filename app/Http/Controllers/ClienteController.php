<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $model;

    public function __construct(Cliente $data)
    {
        $this->model = $data;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clientes = $this->model->paginate(10);
        return view('app.clientes.index', ['titulo'=>'Clientes', 'clientes' => $clientes, 'request'=> $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|min:3|max:40',
            'email' => 'required|min:3|max:50',
            'telefone' => 'required|min:3|max:20',
            'cpf' => 'required|min:10|max:15',
            'endereco' => 'required|min:10|max:2000',

        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo :attribute deve ter no mínimo 3 caracteres',
            'nome.max' => 'O campo :attribute deve ter no máximo 40 caracteres',
            'email.min' => 'O campo :attribute deve ter no mínimo 3 caracteres',
            'email.max' => 'O campo :attribute deve ter no máximo 50 caracteres',
            'telefone.min' =>'O campo :attribute deve ter no mínimo 3 caracteres',
            'telefone.max' => 'O campo :attribute deve ter no maximo 20 caracteres',
            'cpf.min' => 'Insira um CPF Válido',
            'cpf.max' => 'Insira um CPF Válido',
            'endereco.max' => 'O campo :attribute deve ter no máximo 2000 caracteres'
        ];

        $request->validate($regras, $feedback);

        Cliente::create($request->all());
        return  redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
