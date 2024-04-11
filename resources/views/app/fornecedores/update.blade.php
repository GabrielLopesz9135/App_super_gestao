@extends('app.layouts.basico')

@section('title', 'Fornecedor - Adicionar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor - Atualizar</p>
        </div>

        

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">

                {{ $_GET['mensagem'] ?? ''}}

                
                
                <form action="{{ route('fornecedores.update')}}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $fornecedor->id }}">

                    <div class="col-12">
                        <input value="{{ $fornecedor->nome }}" placeholder="Nome" type="text" name="nome" id="nome" class="form-control my-2">
                       
                    </div>
                    <div class="col-12">
                        <input value="{{ $fornecedor->site }}"  placeholder="Site" type="text" name="site" id="site" class="form-control my-2">
                        {{ $errors->has('site') ? $errors->first('site') : '' }}
                    </div>
                    <div class="col-12">
                        <input value="{{ $fornecedor->UF }}" placeholder="UF" type="text" name="UF" id="UF" class="form-control my-2">
                        {{ $errors->has('UF') ? $errors->first('UF') : '' }}
                    </div>
                    <div class="col-12">
                        <input value="{{ $fornecedor->email }}" placeholder="Email" type="email" name="email" id="email" class="form-control my-2">
                        {{ $errors->has('email') ? $errors->first('email') : '' }}
                    </div>

                    <div class="col-12">
                        <a href="{{route('fornecedores.index')}}" style="background: #0d7ee1; color: white;" type="submit" class="btn my-3 p-2 col-3">Voltar</a>
                        <button style="background: #7ab829; color: white;" type="submit" class="btn my-3 p-2 col-3">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>

@endsection