@extends('app.layouts.basico')

@section('title', 'Fornecedor - Adicionar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar</p>
        </div>
        
        @include('app.layouts._partials.menuNav')

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <form action="{{ route('fornecedores.store')}}" method="POST">
                    @csrf
                    <input value="{{ old('nome') }}" placeholder="Nome" type="text" name="nome" id="nome" class="borda-preta">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                    <input value="{{ old('site') }}" placeholder="Site" type="text" name="site" id="site" class="borda-preta">
                    {{ $errors->has('site') ? $errors->first('site') : '' }}

                    <input value="{{ old('UF') }}" placeholder="UF" type="text" name="UF" id="UF" class="borda-preta">
                    {{ $errors->has('UF') ? $errors->first('UF') : '' }}

                    <input value="{{ old('email') }}" placeholder="Email" type="email" name="email" id="email" class="borda-preta">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}

                    <button type="submit" class="borda-preta">Salvar</button>
                </form>
            </div>
        </div>
        
    </div>

@endsection