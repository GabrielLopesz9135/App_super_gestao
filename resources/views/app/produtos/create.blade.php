@extends('app.layouts.basico')

@section('title', 'Produto - Adicionar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Adicionar Produto</p>
        </div>
        
        <div class="menu">
            <ul>
                <li><a href="{{ route('produtos.index')}}">Voltar </a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <form action="{{route('produtos.store')}}" method="POST">
                    @csrf
                    <input value="{{old('nome')}}" placeholder="Nome" type="text" name="nome" id="nome" class="borda-preta">
                        {{$errors->has('nome') ? $errors->first('nome') : ''}}

                    <input value="{{old('nome')}}" placeholder="Descricao" type="text" name="descricao" id="descricao" class="borda-preta">                  
                        {{$errors->has('descricao') ? $errors->first('descricao') : ''}}

                    <input value="{{old('nome')}}" placeholder="Peso" type="text" name="peso" id="peso" class="borda-preta">                  
                        {{$errors->has('peso') ? $errors->first('peso') : ''}}

                    <select name="unidade_id" id="unidade_id" class="borda">
                        <option value="">-- Selecione a Unidade de Medida --</option>
                        @foreach ($unidades as $unidade)
                            <option value="{{$unidade['id']}}" {{ old('unidade_id') == $unidade['id'] ? 'selected' : '' }}>{{$unidade['descricao']}}</option>
                        @endforeach
                    </select>
                        {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}
                   
                    <button type="submit" class="borda-preta">Salvar</button>
                </form>
            </div>
        </div>
        
    </div>

@endsection