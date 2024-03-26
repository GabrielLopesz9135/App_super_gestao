@extends('app.layouts.basico')

@section('title', 'Fornecedor - Listar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Produtos - Listar</p>
        </div>
        
        <div class="menu">
            <ul>
                <li><a href="{{ route('produtos.create')}}">Novo </a></li>
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
                            <th class="border border-black">Fornecedor</th>
                            <th class="border border-black">Peso</th>
                            <th class="border border-black">UN</th>
                            <th class="border border-black">Comprimento</th>
                            <th class="border border-black">Largura</th>
                            <th class="border border-black">Altura</th>
                            <th class="border border-black"></th>
                            <th class="border border-black"></th>
                            <th class="border border-black"></th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($produtos as $produto)
                            <tr>
                                <td class="border border-black">{{ $produto->nome}}</td>
                                <td class="border border-black" >{{ $produto->descricao}}</td>
                                <td class="border border-black" >{{ $produto->fornecedor->nome}}</td>
                                <td class="border border-black">{{ $produto->peso}}</td>
                                <td class="border border-black">{{ $produto->unidade->descricao ?? ''}}</td>
                                <td class="border border-black">{{ $produto->produtoDetalhe->comprimento ?? ''}}</td>
                                <td class="border border-black">{{ $produto->produtoDetalhe->largura ?? ''}}</td>
                                <td class="border border-black">{{ $produto->produtoDetalhe->altura ?? ''}}</td>
                                
                                <td class="border border-black"><a href="{{ route('produtos.show', ['produto'=>$produto->id])}}">Visualizar</a></td>
                                
                                <td class="border border-black">
                                    <form method="POST" id="form_{{$produto->id}}" action="{{route('produtos.destroy', ['produto'=>$produto->id])}}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#" onclick="document.getElementById('form_{{$produto->id}}').submit()">Excluir</a>
                                    </form>
                                </td>

                                <td class="border border-black"><a href="{{ route('produtos.edit', ['produto'=>$produto->id])}}">Editar</a></td> 
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