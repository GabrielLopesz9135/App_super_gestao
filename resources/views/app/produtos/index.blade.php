@extends('app.layouts.basico')

@section('title', 'Fornecedor - Listar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Produtos - Listar</p>
        </div>
        
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create')}}">Novo </a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>


        <div class="informacao-pagina">
            <div style="width: 90%; margin-left:auto; margin-right:auto;">
                <table class="table mb-12 mt-12" width="100%">
                    <thead>
                        <tr>
                            <th class="border border-black">Nome</th>
                            <th class="border border-black">Descição</th>
                            <th class="border border-black">Peso</th>
                            <th class="border border-black">UN</th>
                            <th class="border border-black"></th>
                            <th class="border border-black"></th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($produtos as $produto)
                            <tr>
                                <td class="border border-black">{{ $produto->nome}}</td>
                                <td class="border border-black" >{{ $produto->descricao}}</td>
                                <td class="border border-black">{{ $produto->peso}}</td>
                                <td class="border border-black">{{ $produto->unidade_id}}</td> 
                                {{-- <td class="border border-black"><a href="{{route('fornecedores.delete', ['id'=> $fornecedor->id]) }}">Excluir</a></td>
                                <td class="border border-black"><a href="{{route('fornecedores.edit', ['id'=> $fornecedor->id]) }}">Editar</a></td> --}}
                            </tr>
                        @endforeach

                    </tbody>

                </table>

                <div>
                    {{ $produtos->appends($request)->links() }}
                </div>

                
            </div>
        </div>

        
        
    </div>

@endsection