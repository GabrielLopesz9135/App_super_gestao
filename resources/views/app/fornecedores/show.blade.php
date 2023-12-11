@extends('app.layouts.basico')

@section('title', 'Fornecedor - Listar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor - Listar</p>
        </div>
        
        @include('app.layouts._partials.menuNav')

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left:auto; margin-right:auto;">
                <table class="table mb-12 mt-12" width="100%">
                    <thead>
                        <tr>
                            <th class="border border-black">Nome</th>
                            <th class="border border-black">Site</th>
                            <th class="border border-black">UF</th>
                            <th class="border border-black">email</th>
                            <th class="border border-black"></th>
                            <th class="border border-black"></th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td class="border border-black">{{ $fornecedor->nome}}</td>
                                <td class="border border-black" >{{ $fornecedor->site}}</td>
                                <td class="border border-black">{{ $fornecedor->UF}}</td>
                                <td class="border border-black">{{ $fornecedor->email}}</td> 
                                <td class="border border-black">Excluir</td>
                                <td class="border border-black"><a href="{{route('fornecedores.edit', ['id'=> $fornecedor->id]) }}">Editar</a></td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>

                <div>
                    {{ $fornecedores->appends($request)->links() }}
                </div>

                
            </div>
        </div>

        
        
    </div>

@endsection