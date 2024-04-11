@extends('app.layouts.basico')

@section('title', 'Fornecedor - Adicionar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar</p>
        </div>
        
        

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <form class="row" action="{{ route('fornecedores.store')}}" method="POST">
                    @csrf
                    <div class="col-12">
                        <input placeholder="Nome" type="text" name="nome" id="nome" class="form-control my-2">
                        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                    </div>
                    <div class="col-12">
                        <input placeholder="Site" type="text" name="site" id="site" class="form-control my-2">
                        {{ $errors->has('site') ? $errors->first('site') : '' }}
                    </div>
                    <div class="col-12">
                        <input placeholder="UF" type="text" name="UF" id="UF" class="form-control my-2">
                        {{ $errors->has('UF') ? $errors->first('UF') : '' }}
                    </div>
                    <div class="col-12">
                        <input placeholder="Email" type="email" name="email" id="email" class="form-control my-2">
                        {{ $errors->has('email') ? $errors->first('email') : '' }}
                    </div>
                    <div class="col-12">
                        <button style="background: #7ab829; color: white;" type="submit" class="btn my-3 p-2 col-3">Filtrar</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>

@endsection