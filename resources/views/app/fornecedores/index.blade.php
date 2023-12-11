@extends('app.layouts.basico')

@section('title', 'Fornecedores')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor</p>
        </div>

        
        @include('app.layouts._partials.menuNav')

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <form action="{{route("fornecedores.show")}}" method="POST">
                    @csrf
                    <input placeholder="Nome" type="text" name="nome" id="nome" class="border border-black my-5 p-2">
                    <input placeholder="Site" type="text" name="site" id="site" class="border border-black my-5 p-2">
                    <input placeholder="UF" type="text" name="UF" id="UF" class="border border-black my-5 p-2">
                    <input placeholder="Email" type="email" name="email" id="email" class="border border-black my-5 p-2">
                    <button type="submit" class="border border-black my-5 p-2 bg-green-300">Pesquisar</button>
                </form>
            </div>
        </div>
        
    </div>

@endsection