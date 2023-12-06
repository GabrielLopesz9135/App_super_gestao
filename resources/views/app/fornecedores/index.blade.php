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
                    <input placeholder="Nome" type="text" name="nome" id="nome" class="borda-preta">
                    <input placeholder="Site" type="text" name="site" id="site" class="borda-preta">
                    <input placeholder="UF" type="text" name="UF" id="UF" class="borda-preta">
                    <input placeholder="Email" type="email" name="email" id="email" class="borda-preta">
                    <button type="submit" class="borda-preta">Pesquisar</button>
                </form>
            </div>
        </div>
        
    </div>

@endsection