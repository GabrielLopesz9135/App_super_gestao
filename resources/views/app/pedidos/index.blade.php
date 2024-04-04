@extends('app.layouts.basico')

@section('title', 'Clientes - Listar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Pedidos - Listar</p>
        </div>
        
        <div class="menu">
            <ul>
                <li><a href="{{route('pedidos.create')}}">Novo </a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>


        <div class="informacao-pagina">
            <div style="width: 90%; margin-left:auto; margin-right:auto;">
                <table class="table mb-12 mt-12" width="100%">
                    <thead>
                        <tr>
                            <th class="border border-black">ID Pedido</th>
                            <th class="border border-black">Cliente</th>
                            <th class="border border-black">Data</th>
                            <th class="border border-black">Adicionar Produtos</th>

                            <th class="border border-black"></th>
                            <th class="border border-black"></th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td class="border border-black">{{ $pedido->id}}</td>
                                <td class="border border-black" >{{ $pedido->cliente->nome}}</td>
                                <td class="border border-black" >{{ $pedido->created_at}}</td>
                                <td class="border border-black"><a href="{{ route('pedidos-produtos.create', ['pedido'=>$pedido->id])}}">Adicionar</a></td> 
                                
                                <td class="border border-black">
                                    <form method="POST" id="form_{{$pedido->id}}" action="{{route('pedidos.destroy', ['pedido'=>$pedido->id])}}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#" onclick="document.getElementById('form_{{$pedido->id}}').submit()">Excluir</a>
                                    </form> 

                                </td>

                                <td class="border border-black"><a href="{{ route('pedidos.edit', ['pedido'=>$pedido->id])}}">Editar</a></td> 
                            </tr>
                        @endforeach

                    </tbody>

                </table>

                <div>
                    {{ $pedidos->appends($request)->links() }}
                </div>

                
            </div>
        </div>

        
        
    </div>

@endsection