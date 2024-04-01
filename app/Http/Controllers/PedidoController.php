<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{

    private $model;

    public function __construct(Pedido $data)
    {
        $this->model = $data;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pedidos = $this->model->paginate(10);
        $clientes = Cliente::all();
        return view('app.pedidos.index', ['pedidos' => $pedidos, 'request'=> $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
