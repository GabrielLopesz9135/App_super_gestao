@extends('app.layouts.basico')

@section('title', 'Fornecedores')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedores</p>
        </div>

        

        <div class="card informacao-pagina" style="width: 80%; margin-left:auto; margin-right:auto;">
            <div class="card-header">
              Filtros
            </div>
            <div class="card-body container">
                <form class="row" action="{{route("fornecedores.show")}}" method="POST">
                    @csrf
                    <div class="col-3">
                        <input placeholder="Nome" type="text" name="nome" id="nome" class="form-control">
                    </div>
                    <div class="col-3">
                        <input placeholder="Site" type="text" name="site" id="site" class="form-control ">
                    </div>
                    <div class="col-3">
                        <input placeholder="UF" type="text" name="UF" id="UF" class="form-control col-3">
                    </div>
                    <div class="col-3">
                        <input placeholder="Email" type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="col-12">
                        <button style="background: #7ab829; color: white;" type="submit" class="btn my-3 p-2 col-3">Filtrar</button>
                    </div>
                    
                </form>
            </div>
          </div>

        

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
                                <td class="border border-black"><a href="{{route('fornecedores.delete', ['id'=> $fornecedor->id]) }}">Excluir</a></td>
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