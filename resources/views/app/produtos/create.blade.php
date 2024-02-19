@extends('app.layouts.basico')

@section('title', 'Produto - Adicionar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Adicionar Produto</p>
        </div>
        
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index')}}">Voltar </a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <form action="" method="POST">
                    @csrf
                    <input value="" placeholder="Nome" type="text" name="nome" id="nome" class="borda-preta">

                    <input value="" placeholder="Descricao" type="text" name="descricao" id="descricao" class="borda-preta">                  

                    <input value="" placeholder="Peso" type="text" name="peso" id="peso" class="borda-preta">                  

                    <input value="" placeholder="Unidade_id" type="email" name="unidade_id" id="unidade_id" class="borda-preta">

                    <select name="unidade_id" id="unidade_id" class="borda">
                        <option value="">-- Selecione a Unidade de Medida --</option>
                    </select>
                   
                    <button type="submit" class="borda-preta">Salvar</button>
                </form>
            </div>
        </div>
        
    </div>

@endsection