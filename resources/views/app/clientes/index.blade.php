@extends('app.layouts.basico')

@section('title', 'Clientes - Listar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Clientes - Listar</p>
        </div>
        
        <div class="menu">
            <ul>
                <li><a href="#">Novo </a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>


        <div class="informacao-pagina">
            <div style="width: 90%; margin-left:auto; margin-right:auto;">
                <table class="table mb-12 mt-12" width="100%">
                    <thead>
                        <tr>
                            <th class="border border-black">Nome</th>
                            <th class="border border-black">Email</th>
                            <th class="border border-black">Telefone</th>
                            <th class="border border-black">Endereço</th>
                            <th class="border border-black">CPF</th>
                            <th class="border border-black"></th>
                            <th class="border border-black"></th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($clientes as $cliente)
                            <tr>
                                <td class="border border-black">{{ $cliente->nome}}</td>
                                <td class="border border-black" >{{ $cliente->email}}</td>
                                <td class="border border-black" >{{ $cliente->telefone}}</td>
                                <td class="border border-black">{{ $cliente->endereco}}</td>
                                <td class="border border-black">{{ $cliente->cpf}}</td>

                                
                                
                                <td class="border border-black">
                                    <form method="POST" id="form_{{$cliente->id}}" action="{{route('clientes.destroy', ['cliente'=>$cliente->id])}}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#" onclick="document.getElementById('form_{{$cliente->id}}').submit()">Excluir</a>
                                    </form>
                                </td>

                                <td class="border border-black"><a href="{{ route('clientes.edit', ['cliente'=>$cliente->id])}}">Editar</a></td> 
                            </tr>
                        @endforeach

                    </tbody>

                </table>

                <div>
                    {{ $clientes->appends($request)->links() }}
                </div>

                
            </div>
        </div>

        
        
    </div>

@endsection