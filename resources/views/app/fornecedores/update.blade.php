@extends('app.layouts.basico')

@section('title', 'Fornecedor - Adicionar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor - Atualizar</p>
        </div>

        
        @include('app.layouts._partials.menuNav')

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                {{ $_GET['mensagem'] }}
                
                <form action="{{ route('fornecedores.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $fornecedor->id }}">

                    <input value="{{ $fornecedor->nome }}" placeholder="Nome" type="text" name="nome" id="nome" class="borda-preta">

                    <input value="{{ $fornecedor->site }}" placeholder="Site" type="text" name="site" id="site" class="borda-preta">

                    <input value="{{ $fornecedor->UF }}" placeholder="UF" type="text" name="UF" id="UF" class="borda-preta">

                    <input value="{{ $fornecedor->email }}" placeholder="Email" type="email" name="email" id="email" class="borda-preta">

                    <button type="submit" class="borda-preta">Salvar</button>
                </form>
            </div>
        </div>
        
    </div>

@endsection