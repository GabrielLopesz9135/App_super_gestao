<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;
use Illuminate\Http\Request;

class PedidoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Pedido $pedido)
    {
        $produtos = Produto::all();
        return view('app.pedidos_produtos.create', ['pedido_id' => $pedido->id, 'pedido' => $pedido, 'produtos' => $produtos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pedido = Pedido::find($request->all('pedido_id'))->first();

        $regras = [
            'produto_id' => 'exists:produtos,id',
            'pedito_id' => 'exists:pedidos,id'
        ];

        $feedback = [
            'produto_id.exists' => 'Esse cliente não existe no banco de dados',
            'pedito_id.exists' => 'Esse cliente não existe no banco de dados'
        ];

        $request->validate($regras, $feedback);

        PedidoProduto::create($request->all());
        return redirect()->route('pedidos-produtos.create', ['pedido' => $pedido->id]);

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
