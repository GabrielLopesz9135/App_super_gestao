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
                <table border="1px" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>email</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td>{{ $fornecedor->nome}}</td>
                                <td>{{ $fornecedor->site}}</td>
                                <td>{{ $fornecedor->UF}}</td>
                                <td>{{ $fornecedor->email}}</td> 
                                <td>Excluir</td>
                                <td><a href="{{route('fornecedores.edit', ['id'=> $fornecedor->id]) }}">Editar</a></td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
                
            </div>
        </div>
        
    </div>

@endsection